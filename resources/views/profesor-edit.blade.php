<!DOCTYPE html>
<html>
<head>
    <title>Edit Profesor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Profesor</h1>

        <form action="{{ route('profesor.update', ['profesor' => $profesor->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $profesor->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $profesor->apellido }}" required>
            </div>
            <div class="form-group">
                <label for="titulo">Titulo:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $profesor->titulo }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Profesor</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
            <!-- <a href="{{ route('view.profesor') }}" class="btn btn-secondary">Cancel</a> Add Cancel button -->
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
