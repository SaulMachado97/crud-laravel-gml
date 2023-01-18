<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $categoria->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $categoria->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>

    <div class="box-footer mt20" style="padding-top: 10px;">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</div>
