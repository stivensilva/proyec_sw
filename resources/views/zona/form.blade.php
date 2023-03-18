<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_zona') }}
            {{ Form::text('id_zona', $zona->id_zona, ['class' => 'form-control' . ($errors->has('id_zona') ? ' is-invalid' : ''), 'placeholder' => 'Id Zona']) }}
            {!! $errors->first('id_zona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_zona') }}
            {{ Form::text('descripcion_zona', $zona->descripcion_zona, ['class' => 'form-control' . ($errors->has('descripcion_zona') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Zona']) }}
            {!! $errors->first('descripcion_zona', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>