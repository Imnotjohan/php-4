<!DOCTYPE html>
<html>

<head>
    <title>Imparte Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Imparte Form</h1>

        <!-- Create Imparte Form -->
        <form action="{{ route('imparte.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="c_codclase">Clase Code:</label>
                <input type="text" class="form-control" id="c_codclase" name="c_codclase" required>
            </div>
            <div class="form-group">
                <label for="p_idprofesor">Profesor ID:</label>
                <input type="text" class="form-control" id="p_idprofesor" name="p_idprofesor" required>
            </div>
            <div class="form-group">
                <label for="a_idaula">Aula ID:</label>
                <input type="text" class="form-control" id="a_idaula" name="a_idaula" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Imparte</button>
        </form>

        <!-- Display Imparte Table -->
        <h2>Imparte List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Clase Code</th>
                    <th>Profesor ID</th>
                    <th>Aula ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($impartes as $imparte)
                <tr>
                    <td><a href="{{ route('view.clase.edit', ['clase' => $imparte->c_codclase]) }}">{{ $imparte->c_codclase }}</a></td>
                    <td><a href="{{ route('view.profesor.edit', ['profesor' => $imparte->p_idprofesor]) }}">{{ $imparte->p_idprofesor }}</a></td>
                    <td><a href="{{ route('view.aula.edit', ['id' => $imparte->a_idaula]) }}">{{ $imparte->a_idaula }}</a></td>
                    <td>
                        <form action="{{ route('imparte.destroy', ['imparte' => $imparte]) }}" method="POST" style="display: inline;">
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