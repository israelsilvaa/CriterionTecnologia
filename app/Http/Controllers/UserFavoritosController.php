<?php

namespace App\Http\Controllers;

use App\Models\UserFavorito;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserFavoritosController extends Controller
{
    /**
     * Adiciona um produto aos favoritos do usuário
     */
    public function favoritar($modelo_id)
    {
        $user_id = Auth::user()->id;
        $modelo_id = intval($modelo_id);

        // Verifica se o modelo já está na lista de favoritos do usuário
        $favoritoExistente = UserFavorito::where('user_id', $user_id)
            ->where('modelo_id', $modelo_id)
            ->first();

        try {
            if ($favoritoExistente) {
                // Se já existir, remove dos favoritos
                $favoritoExistente->delete();

                return redirect()->back()->withInput()->withErrors([
                    'warning' => 'Removido dos favoritos',
                ]);
            } else {
                // Se não existir, adiciona aos favoritos
                $newFavorito = new UserFavorito();
                $newFavorito->user_id = $user_id;
                $newFavorito->modelo_id = $modelo_id;
                $newFavorito->save();

                return redirect()->back()->withInput()->withErrors([
                    'success' => 'Adicionado aos favoritos',
                ]);
            }
        } catch (Exception $e) {
            return redirect()->back()->withInput()->withErrors([
                'danger' => "Erro ao processar a operação: " . $e->getMessage(),
            ]);
        }
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserFavorito $userFavorito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserFavorito $userFavorito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserFavorito $userFavorito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserFavorito $userFavorito)
    {
        //
    }
}
