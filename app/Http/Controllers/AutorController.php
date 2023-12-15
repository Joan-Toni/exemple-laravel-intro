<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor; 

class AutorController extends Controller
{
    /**
     * Mostra una llista del recurs.
     */
    public function index()
    {
        $autors = Autor::select('ID_AUT', 'NOM_AUT')->paginate(10);
        return view('autors.index', ['autors' => $autors]);
    }
    

    public function create()
{
    // Obté l'últim ID i afegeix 1
    $lastAutor = Autor::orderBy('ID_AUT', 'desc')->first();
    $nextId = $lastAutor ? $lastAutor->ID_AUT + 1 : 1;

    return view('autors.create', ['nextId' => $nextId]);
}

    // Store
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'NOM_AUT' => 'required|max:255',
        // altres validacions segons sigui necessari
    ]);

    // Assumeix que ja has obtingut el següent ID d'alguna manera
    $nextId = $this->getNextIdForAutor();

    // Afegeix l'ID al teu array de dades validades
    $validatedData['ID_AUT'] = $nextId;

    $autor = Autor::create($validatedData);

    return redirect()->route('autors.index')->with('success', 'Autor creat correctament.');
}

private function getNextIdForAutor()
{
    // Obté l'últim ID i afegeix 1
    $lastAutor = Autor::orderBy('ID_AUT', 'desc')->first();
    return $lastAutor ? $lastAutor->ID_AUT + 1 : 1;
}

    

// Edit
public function edit(string $id)
{
    $autor = Autor::findOrFail($id);

    return view('autors.edit', ['autor' => $autor]);
}

// Update
public function update(Request $request, string $id)
{
    // Validació de dades
    $validatedData = $request->validate([
        'NOM_AUT' => 'required|max:255',
        // altres camps segons sigui necessari
    ]);

    // Actualització de l'autor
    $autor = Autor::findOrFail($id);
    $autor->update($validatedData);

    return redirect()->route('autors.index')->with('success', 'Autor actualitzat correctament.');
}

// Destroy
public function destroy(string $id)
{
    $autor = Autor::findOrFail($id);
    $autor->delete();

    return redirect()->route('autors.index')->with('success', 'Autor eliminat correctament.');
}

    


    // Continua amb la implementació dels altres mètodes segons les teves necessitats
}
