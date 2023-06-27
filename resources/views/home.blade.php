<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .card-link {
            text-decoration: none;
            color: #333;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }
        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 1.5rem;
            text-align: center;
        }
        .card-title {
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .card-primary {
            background-color: #007bff;
            color: #fff;
        }
        .card-success {
            background-color: #28a745;
            color: #fff;
        }
        .card-info {
            background-color: #17a2b8;
            color: #fff;
        }
        .card-imparte {
            background-color: #ffc107;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Home</h1>
        <div class="row justify-content-center">
            <div class="col-sm-3">
                <div class="card card-primary">
                    <div class="card-body">
                        <h5 class="card-title">Add Aula</h5>
                        <a href="{{ route('view.aula') }}" class="card-link">
                            Add Aula
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-success">
                    <div class="card-body">
                        <h5 class="card-title">Add Clase</h5>
                        <a href="{{ route('view.clase') }}" class="card-link">
                            Add Clase
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-info">
                    <div class="card-body">
                        <h5 class="card-title">Add Profesor</h5>
                        <a href="{{ route('view.profesor') }}" class="card-link">
                            Add Profesor
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card card-imparte">
                    <div class="card-body">
                        <h5 class="card-title">Add Imparte</h5>
                        <a href="{{ route('view.imparte') }}" class="card-link">
                            Add Imparte
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
