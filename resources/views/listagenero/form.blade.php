<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_genero') }}
            {{ Form::text('id_genero', $listagenero->id_genero, ['class' => 'form-control' . ($errors->has('id_genero') ? ' is-invalid' : ''), 'placeholder' => 'Id Genero']) }}
            {!! $errors->first('id_genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_genero') }}
            {{ Form::text('descripcion_genero', $listagenero->descripcion_genero, ['class' => 'form-control' . ($errors->has('descripcion_genero') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Genero']) }}
            {!! $errors->first('descripcion_genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sw_activo') }}
            {{ Form::text('sw_activo', $listagenero->sw_activo, ['class' => 'form-control' . ($errors->has('sw_activo') ? ' is-invalid' : ''), 'placeholder' => 'Sw Activo']) }}
            {!! $errors->first('sw_activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>