<!DOCTYPE html>
<html>

<head>
    <title>Profesor Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Profesor Form</h1>

        <!-- Create Profesor Form -->
        <form action="{{ route('profesor.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">ID:</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="titulo">Titulo:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Profesor</button>
        </form>

        <!-- Display Profesor Table -->
        <h2>Profesor List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Titulo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profesores as $profesor)
                <tr>
                    <td>{{ $profesor->id }}</td>
                    <td>{{ $profesor->nombre }}</td>
                    <td>{{ $profesor->apellido }}</td>
                    <td>{{ $profesor->titulo }}</td>
                    <td>
                        <a href="{{ route('view.profesor.edit', ['profesor' => $profesor->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('profesor.destroy', ['profesor' => $profesor->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Go to Home Button -->
        <a href="{{ route('home') }}" class="btn btn-secondary">Go to Home</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>