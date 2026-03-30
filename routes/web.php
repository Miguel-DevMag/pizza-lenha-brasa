<?php

use Illuminate\Support\Facades\Route;

/*
| Interface pública: HTML/CSS estático em /public/pizzaria (sem banco, sem auth).
| A raiz redireciona para a vitrine. Rotas antigas apontam para os mesmos arquivos.
*/

Route::redirect('/', '/pizzaria/index.html');

Route::redirect('/inicio', '/pizzaria/inicio.html');
Route::redirect('/cardapio', '/pizzaria/cardapio.html');
Route::redirect('/pedidos', '/pizzaria/pedidos.html');
Route::redirect('/perfil', '/pizzaria/perfil.html');
Route::redirect('/promocao', '/pizzaria/promocao.html');
Route::redirect('/sobre', '/pizzaria/sobre.html');
Route::redirect('/login', '/pizzaria/login.html');
Route::redirect('/cadastro', '/pizzaria/cadastro.html');
