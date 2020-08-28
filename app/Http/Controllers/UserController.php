<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse|Response
     */
    public function index() {
        $users = User::orderBy('id')->get();

        return response()->json($users); // valores retornados em JSON
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse|Response
     */
    public function show($id) {
        $user = User::findOrFail($id);

        return response()->json($user); // valores retornados em JSON
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return JsonResponse|Response
     */
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->saldo = $request->valor; // Recece apenas o parâmetro de valor para fazer a atualização
        $user->save();

        return response()->json($request); // valores retornados em JSON
    }
}