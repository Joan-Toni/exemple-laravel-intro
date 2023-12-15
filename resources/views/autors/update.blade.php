<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Editar Autor</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Editar Autor</h2>
        <form method="POST" action="{{ route('autors.update', $autor->ID_AUT) }}">
            @csrf
            @method('PUT') 
            <div class="mb-3">
                <label for="NOM_AUT" class="form-label">Nom de l'Autor</label>
                <input type="text" class="form-control" id="NOM_AUT" name="NOM_AUT" value="{{ $autor->NOM_AUT }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Autor</button>
        </form>
    </div>
</body>
</html>
