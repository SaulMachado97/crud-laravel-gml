<h1>Registro exitoso!</h1>
<h2>El usuario {{ $usuario->nombre }} se registró exitosamente!</h2>
<br>
<h2>Resumen de registros:</h2>
<ul>
    @foreach($resumen as $row)
    <li> {{ $row->pais }} => {{ $row->user_count }}</li>
    @endforeach
</ul>

