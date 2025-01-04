@extends('layouts.app')

@section('template_title')
  {{ $libro->name ?? "{{ __('Mostrar') Libro" }}
@endsection

@section('content')
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <span class="card-title">{{ __('Mostrar') }} Libro</span>
              <a class="btn btn-primary" href="{{ route('libros.index') }}"> {{ __('Volver') }}</a>
            </div>
          </div>

          <div class="card-body">
            <div class="form-group">
              <strong>Categoria</strong>
              {{ $libro->categoria->nombre }}
            </div>
            <div class="form-group">
              <strong>Nombre:</strong>
              {{ $libro->nombre }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
