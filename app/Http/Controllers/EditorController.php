<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

// Generat amb php artisan make:controller EditorsController --api

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editors = Editor::paginate(10);
        return view('editors.index', ['editors' => $editors]);     //compact($editors) es equivalent a ['editors' => $editors]
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        //
    }

    /**
     * Edita l'editor identificat per $id.
     */

    public function edit(string $id)
    {
        $editor = Editor::find($id);

        return view('editors.edit', ['editor' => $editor]);
    }

    /**
     * Modifica l'editor identificat per $id.
     */

    public function modifica(Request $request,$id)
    {
        try {
            $editor = Editor::find($id);
            $editor->NOM_EDIT = $request->NOM_EDIT;
            $editor->save();
        } catch (\Throwable $th) {
            return redirect()->route('editors.index',['error' => 'Error al modificar el editor.']);
        }
        return redirect()->route('editors.index')->with('success', $editor->NOM_EDIT.' modificat correctament.');
    } 
    /**
    * Esborra l'editor identificat per $id.
    */
    public function destroy(string $id)
    {
        // PER FER: Esborrar editor.
    }
}
