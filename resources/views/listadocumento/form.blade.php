<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_tipo_documento') }}
            {{ Form::text('id_tipo_documento', $listadocumento->id_tipo_documento, ['class' => 'form-control' . ($errors->has('id_tipo_documento') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Documento']) }}
            {!! $errors->first('id_tipo_documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $listadocumento->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alterno') }}
            {{ Form::text('alterno', $listadocumento->alterno, ['class' => 'form-control' . ($errors->has('alterno') ? ' is-invalid' : ''), 'placeholder' => 'Alterno']) }}
            {!! $errors->first('alterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>