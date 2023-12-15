<!--<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Create Autors</title>
    
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="{{ route('autors.index') }}">Autors</a>
            <div class="justify-end">
                <div class="col">
                    <a class="btn btn-sm btn-success" href="{{ route('autors.create') }}">Afegir Autor</a>
                </div>
            </div>
    </nav>
    <div class="container">
        <h2>Afegir un nou Autor</h2>
        <form method="POST" action="{{ route('autors.store') }}">
            @csrf
            <div class="mb-3">
                <label for="NOM_AUT" class="form-label">Nom de l'Autor</label>
                <input type="text" class="form-control" id="NOM_AUT" name="NOM_AUT" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Crear Autor</button>
        </form>
    </div>
</body>
</html> 
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Afegir un nou Autor</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Afegir un Nou Autor</h2>
        <form method="POST" action="{{ route('autors.store') }}">
            @csrf
            <div class="mb-3">
                <label for="ID_AUT" class="form-label">ID de l'Autor</label>
                <input type="text" class="form-control" id="ID_AUT" name="ID_AUT" required>
            </div>
            <div class="mb-3">
                <label for="NOM_AUT" class="form-label">Nom de l'Autor</label>
                <input type="text" class="form-control" id="NOM_AUT" name="NOM_AUT" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear Autor</button>
        </form>
    </div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Afegir un nou Autor</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Afegir un Nou Autor</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('autors.store') }}">
            @csrf
            <div class="mb-3">
                <label for="ID_AUT" class="form-label">ID de l'Autor</label>
                <input type="text" class="form-control" id="ID_AUT" name="ID_AUT" value="{{ $nextId }}" readonly>
                <label for="NOM_AUT" class="form-label">Nom de l'Autor</label>
                <input type="text" class="form-control" id="NOM_AUT" name="NOM_AUT" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear Autor</button>
        </form>
    </div>
</body>
</html>

