<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http as Http;
use App\Mail\SendMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

/**
 * Class UsuarioController
 * @package App\Http\Controllers
 */
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        // $usuarios = Usuario::paginate();
        $usuarios = Usuario::select('usuarios.id', 'usuarios.categoria_id', 'usuarios.nombre', 'usuarios.apellido', 'usuarios.pais', 'usuarios.email', 'usuarios.direccion', 'usuarios.celular', 'categorias.descripcion as desCategoria')
                    ->join('categorias','categorias.id', '=', 'usuarios.categoria_id')
                    ->paginate();

        // dd($usuarios2);

        return view('usuario.index', compact('usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $usuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $response = Http::get('https://restcountries.com/v3.1/region/americas');

        $paises = $response->json();

        $paisesSurAmerica = array_filter($paises, function($pais){
            return $pais['subregion'] == 'South America';
        });

        $categorias = Categoria::get();

        $usuario = new Usuario();
        return view('usuario.create', compact('usuario','paises', 'paisesSurAmerica', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Usuario::$rules);

        $usuario = Usuario::create($request->all());

        $resumen = DB::table('usuarios')
                   ->select(DB::raw('count(*) as user_count, pais'))
                   ->groupBy('pais')
                   ->get();

        $destinatarios = DB::table('usuarios')
                        ->select('email')
                        ->where('categoria_id','=','4')
                        ->get();

        // $destinatarios = array('ingmachado07@gmail.com');

        foreach($destinatarios as $destinatario){
            Mail::to($destinatario)->send(new SendMail($usuario, $resumen));
        }

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);

        return view('usuario.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response = Http::get('https://restcountries.com/v3.1/region/americas');

        $paises = $response->json();

        $paisesSurAmerica = array_filter($paises, function($pais){
            return $pais['subregion'] == 'South America';
        });

        $categorias = Categoria::get();

        $usuario = Usuario::find($id);

        return view('usuario.edit', compact('usuario','paisesSurAmerica','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Usuario $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        request()->validate(Usuario::$rules);

        $usuario->update($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id)->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario deleted successfully');
    }
}
