<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Modelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function index(int $idMarca)
    {

        $marca = Marca::find($idMarca);

        if (!$marca) {
            return response()->json(['message' => 'Marca não encontrada'], 404);
        }

        $modelos = Modelo::where('marca_id', $idMarca)
            ->select('id', 'nome_modelo', 'preco', 'created_at', 'updated_at')
            ->get();

        return response()->json($modelos, 200);
    }

    public function viewPainel()
    {
        return view('cliente.index');
    }

    public function sair()
    {

        Auth::logout();
        return redirect()->route('visitante.index');
    }
}
