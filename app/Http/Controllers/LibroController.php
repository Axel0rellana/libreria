<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\Categoria;
use Illuminate\Http\Request;
use PDF;

class LibroController extends Controller
{
  public function index()
  {
    $libros = Libro::paginate();
    return view('libro.index', compact('libros'))
        ->with('i', (request()->input('page', 1) - 1) * $libros->perPage());
  }

  public function pdf()
  {
    $libros = Libro::paginate();
    $pdf = PDF::loadView('libro.pdf', ['libros'=>$libros]);
    return $pdf->download('__libros.pdf');
  }

  public function create()
  {
    $libro = new Libro();
    $categorias = Categoria::pluck('nombre', 'id');
    return view('libro.create', compact('libro', 'categorias'));
  }

  public function store(Request $request)
  {
    request()->validate(Libro::$rules);
    $libro = Libro::create($request->all());
    return redirect()->route('libros.index')
        ->with('success', 'Libro agregado correctamente.');
  }

  public function show($id)
  {
    $libro = Libro::find($id);
    return view('libro.show', compact('libro'));
  }

  public function edit($id)
  {
    $libro = Libro::find($id);
    $categorias = Categoria::pluck('nombre', 'id');
    return view('libro.edit', compact('libro', 'categorias'));
  }

  public function update(Request $request, Libro $libro)
  {
    request()->validate(Libro::$rules);
    $libro->update($request->all());
    return redirect()->route('libros.index')
        ->with('success', 'Libro actualizado correctamente');
  }

  public function destroy($id)
  {
    $libro = Libro::find($id)->delete();
    return redirect()->route('libros.index')
        ->with('success', 'Libro eliminado correctamente');
  }
}
