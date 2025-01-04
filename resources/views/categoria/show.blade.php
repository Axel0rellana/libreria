@extends('layouts.app')

@section('template_title')
	{{ $categoria->name ?? "{{ __('Mostrar') Categoria" }}
@endsection

@section('content')
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <span class="card-title">{{ __('Mostrar') }} Categoria</span>
              <a class="btn btn-primary" href="{{ route('categorias.index') }}"> {{ __('Volver') }}</a>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <strong>Nombre:</strong>
              {{ $categoria->nombre }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
