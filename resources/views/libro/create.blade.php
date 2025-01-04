@extends('layouts.app')

@section('template_title')
	{{ __('Agregar') }} Libro
@endsection

@section('content')
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        @includeif('partials.errors')

        <div class="card card-default">
          <div class="card-header">
            <span class="card-title">{{ __('Agregar') }} Libro</span>
          </div>
          <div class="card-body">
            <form method="POST" autocomplete="off" action="{{ route('libros.store') }}" role="form" enctype="multipart/form-data">
              @csrf
              @include('libro.form')
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
