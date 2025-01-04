<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="theme-color" content="#ffffff" />
  	<meta name="description" content="Report PDF" />

		<link rel="stylesheet" href="{{ public_path('css/app.css') }}" type="text/css" />
		
		<title>Report PDF</title>
	</head>
	<body>
    <h2>Lista de libros</h2>

    <table class="table table-striped table-hover">
      <thead class="thead">
        <tr>  
					<th>Categoria</th>
					<th>Nombre</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($libros as $libro)
          <tr>            
						<td>
							{{ $libro->categoria->nombre }}
						</td>
						<td>{{ $libro->nombre }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>