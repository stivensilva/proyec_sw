<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_tipo_cliente') }}
            {{ Form::text('id_tipo_cliente', $listacliente->id_tipo_cliente, ['class' => 'form-control' . ($errors->has('id_tipo_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Cliente']) }}
            {!! $errors->first('id_tipo_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_cliente') }}
            {{ Form::text('descripcion_cliente', $listacliente->descripcion_cliente, ['class' => 'form-control' . ($errors->has('descripcion_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Cliente']) }}
            {!! $errors->first('descripcion_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>