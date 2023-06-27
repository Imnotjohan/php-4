<!DOCTYPE html>
<html>
<head>
    <title>Clase Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Clase Form</h1>

        <!-- Create Clase Form -->
        <form action="{{ route('clase.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="codclase">Codclase:</label>
                <input type="text" class="form-control" id="codclase" name="codclase" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="credito">Crédito:</label>
                <input type="number" class="form-control" id="credito" name="credito" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Clase</button>
        </form>

        <!-- Display Clase Table -->
        <h2>Clase List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Codclase</th>
                    <th>Nombre</th>
                    <th>Crédito</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clases as $clase)
                <tr>
                    <td>{{ $clase->codclase }}</td>
                    <td>{{ $clase->nombre }}</td>
                    <td>{{ $clase->credito }}</td>
                    <td>
                        <a href="{{ route('view.clase.edit', ['clase' => $clase->codclase]) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('clase.destroy', ['clase' => $clase->codclase]) }}" method="POST" style="display: inline;">
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
