<div class="box box-info padding-1">
    <div class="box-body">

        <!-- <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::text('categoria_id', $usuario->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">
            {{ Form::label('Categorias') }}
            <!-- {{ Form::text('categoria_id', $usuario->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }} -->
            <select name="categoria_id" class='form-control'>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">
                    {{ $categoria->descripcion }}
                </option>
            @endforeach
            </select>
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $usuario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $usuario->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- <div class="form-group">
            {{ Form::label('pais') }}
            {{ Form::text('pais', $usuario->pais, ['class' => 'form-control' . ($errors->has('pais') ? ' is-invalid' : ''), 'placeholder' => 'Pais']) }}
            {!! $errors->first('pais', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">
            {{ Form::label('Pais') }}
            <!-- {{ Form::text('categoria_id', $usuario->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }} -->
            <select name="pais" class='form-control'>
            @foreach($paisesSurAmerica as $pais)
                <option value="{{ $pais['name']['common'] }}">
                    {{ $pais['name']['common'] }}
                </option>
            @endforeach
            </select>
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::email('email', $usuario->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $usuario->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::number('celular', $usuario->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20" style="padding-top: 10px;">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</div>
