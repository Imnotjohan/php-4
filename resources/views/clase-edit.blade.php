<!DOCTYPE html>
<html>
<head>
    <title>Edit Clase</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Clase</h1>

        <form action="{{ route('clase.update', ['codclase' => $clase->codclase]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $clase->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="creditos">Créditos:</label>
                <input type="number" class="form-control" id="creditos" name="creditos" value="{{ $clase->credito }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Clase</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
            <!-- <a href="{{ route('view.clase') }}" class="btn btn-secondary">Cancel</a> Add Cancel button -->
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
