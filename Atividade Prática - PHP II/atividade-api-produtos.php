<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', function () {
    $produtos = Cache::get('produtos', []);

    return response()->json(['produtos' => $produtos]);
});

Route::post('/produtos', function (Request $request) {
    $produtos = Cache::get('produtos', []);

    $produto = $request->json()->all();

    $produtos[] = $produto;

    Cache::put('produtos', $produtos);

    return response()->json(['success' => true, 'msg' => 'Produto adicionado com sucesso!']);
});

Route::delete('/produtos', function () {
    Cache::forget('produtos');

    return response()->json(['success' => true, 'msg' => 'Produtos excluídos!']);
});
