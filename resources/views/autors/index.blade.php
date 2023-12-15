<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Index Autors</title>
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
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="w-50">  
            <table class='table table-sm table-striped'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                @foreach ($autors as $autor)
                <tr>
                    <td scope="col">
                        {{ $autor->ID_AUT }}
                    </td>
                    <td scope="col">
                        {{ $autor->NOM_AUT }}
                    </td>
                    <td scope="col">
                        <a href="{{ route('autors.edit', $autor->ID_AUT) }}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td scope="col">
                        <form action="{{ route('autors.destroy', $autor->ID_AUT) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Esborrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $autors->links('pagination::bootstrap-4') }}
        </div> 
    </div>
</body>

</html>
