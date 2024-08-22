<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;

class MangaController extends Controller {

    public function create() {
        return view('cadastro');
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'nome' => 'required',
            'autor' => 'required',
            'volumes' => 'required',
            'ano' => 'required'
        ]);
        Manga::create($validateData);
        return redirect()->route('listagem')->with('success', 'Manga cadastrado com sucesso!');
    }

    public function index() {
        $mangas = Manga::all();
        return view('listagem', ['mangas' => $mangas]);
    }

    public function destroy($id) {
        $manga = Manga::findOrFail($id);
        $manga->delete();
        return redirect()->route('listagem')->with('success', 'Manga excluído com sucesso!');
    }

}
