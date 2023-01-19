@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $usuario->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $usuario->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Pais:</strong>
                            {{ $usuario->pais }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $usuario->email }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $usuario->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $usuario->celular }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
