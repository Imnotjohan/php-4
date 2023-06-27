<!DOCTYPE html>
<html>
<head>
    <title>Aula Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Aula Form</h1>

        <!-- Create Aula Form -->
        <form action="{{ route('aula.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="ubicacion">Ubicación:</label>
                <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Aula</button>
        </form>

        <!-- Display Aula Table -->
        <h2>Aula List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aulas as $aula)
                <tr>
                    <td>{{ $aula->id }}</td>
                    <td>{{ $aula->nombre }}</td>
                    <td>{{ $aula->ubicacion }}</td>
                    <td>
                        <a href="{{ route('view.aula.edit', ['id' => $aula->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('aula.destroy', ['aula' => $aula->id]) }}" method="POST" style="display: inline;">
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
