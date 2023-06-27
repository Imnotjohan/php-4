<!DOCTYPE html>
<html>
<head>
    <title>Edit Imparte</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Imparte</h1>

        <form action="{{ route('imparte.update', ['c_codclase' => $imparte->c_codclase, 'p_idprofesor' => $imparte->p_idprofesor, 'a_idaula' => $imparte->a_idaula]) }}" method="POST"> 
        @csrf
            @method('PUT')
            <div class="form-group">
                <label for="c_codclase">Clase Code:</label>
                <input type="text" class="form-control" id="c_codclase" name="c_codclase" value="{{ $imparte->c_codclase }}" required>
            </div>
            <div class="form-group">
                <label for="p_idprofesor">Profesor ID:</label>
                <input type="text" class="form-control" id="p_idprofesor" name="p_idprofesor" value="{{ $imparte->p_idprofesor }}" required>
            </div>
            <div class="form-group">
                <label for="a_idaula">Aula ID:</label>
                <input type="text" class="form-control" id="a_idaula" name="a_idaula" value="{{ $imparte->a_idaula }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Imparte</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
            <!-- <a href="{{ route('view.imparte') }}" class="btn btn-secondary">Cancel</a> Add Cancel button -->
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
