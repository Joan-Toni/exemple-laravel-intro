<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Index Editorials</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('editors.index') }}>Editors</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('editors.create') }}>Afegir Editorial</a>
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
                    <th>Codi</th>
                    <th>Editor</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            @foreach ($editors as $editor)
            <tr>
                <td scope="col">
                    {{ $editor->ID_EDIT }}
                </td>
                <td scope="col">
                    {{ $editor->NOM_EDIT }}
                </td>
                <td scope="col">
                    <a href="{{ route('editors.edit', $editor->ID_EDIT) }}" class="btn btn-primary btn-sm">Editar</a>
                </td>
                <td scope="col">
                    <form action="{{ route('editors.destroy', $editor->ID_EDIT) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Esborrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{  $editors->links('pagination::bootstrap-4')  }}
      </div> 
    </div>
</body>

</html>