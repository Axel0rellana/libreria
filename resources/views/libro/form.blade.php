<div class="box box-info padding-1">
  <div class="box-body">
    <div class="form-group">
      {{ Form::select('categoria_id', $categorias, $libro->categoria_id, ['class' => 'form-control mb-3' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
      {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
      {{ Form::text('nombre', $libro->nombre, ['class' => 'form-control mb-3' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
      {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
    </div>
  </div>
  <div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
  </div>
</div>