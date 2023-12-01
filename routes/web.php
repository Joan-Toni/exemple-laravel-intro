<?php

use Illuminate\Support\Facades\Route;
use App\Models\Editor;
use App\Http\Controllers\EditorController;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(
    ['prefix' => 'proves'],
    // Exemples de rutes
    function () {
        Route::get('/hola', function () {
            return "Hola món!";
        })->name('salutacio');

        Route::get('/info/{nom}/{sport}', function ($nom, $sport) {
            return "El teu nom es $nom. El teu esport preferit és $sport
                    <br><a href='" . route('salutacio') . "'>Torna</a>";
        });
    }
);

Route::group(
    ['prefix' => 'bbdd'],
    // Exemples de rutes amb resposta de la base de dades
    function () {
        Route::get('/editorials', function () {
            $editors=DB::select('select * from EDITORS');
            return $editors;
        })->name('editorial.cerca');

        Route::get('/editorials/{id}', function ($id) {
            $editors=DB::select('select * from EDITORS where id_edit=?',[$id]);
            return $editors;
        })->name('editorial.cerca.id');

        Route::get('/editors', function () {
            $editors=Editor::All();
            return $editors;
        })->name('bbdd.editorials');

        Route::get('/editors/paginat', function () {
            $editors=Editor::paginate(15);
            return $editors;
        })->name('bbdd.editorials');

        Route::get('/editors/{id}', function ($id) {
            $editor=Editor::Find($id);
            return $editor;
        })->name('bbdd.editorials');

    }
);

Route::group(
    ['prefix' => 'editors'],
    // CRUD de la taula editors. Feim servir controladors.
    function () {
        // llista totes les editorials
        Route::get('',[EditorController::class, 'index'])->name('editors.index');

        Route::post('', function () {
            return "CREAR";
        })->name('editors.create');

        // Edita la editorial id
        Route::get('/{id}',[EditorController::class,'edit'])->name('editors.edit');

        // Esborra la editarial id
        Route::delete('', function () {
            return "DELETE";
        })->name('editors.destroy');

        // Modifica la editorial id
        Route::put('/{id}', [EditorController::class,'modifica'])->name('editors.update');

        // Crea una nova editorial. Està PER FER.
        Route::post('', function () {
            return "CREAR";
        })->name('editors.create');

    }
);



