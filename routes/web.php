<?php

use App\Livewire\Auth\Login;
use App\Livewire\Caracteristicas\CaracteristicasCreate;
use App\Livewire\Caracteristicas\CaracteristicasIndex;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Movimentacao\MovimentacaoCreate;
use App\Livewire\Movimentacao\MovimentacaoIndex;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produto/create', ProdutoCreate::class)->name('produto.create');
Route::get('produto/edit/{id}', ProdutoEdit::class)->name('produto.edit');
Route::get('produto', ProdutoIndex::class)->name('produto.index');

Route::get('movimentacao/create', MovimentacaoCreate::class)->name('movimentacao.create');
Route::get('movimentacao/index', MovimentacaoIndex::class)->name('movimentacao.index');

Route::get('caracteristicas/create', CaracteristicasCreate::class)->name('caracteristica.create');
Route::get('caracteristicas/index', CaracteristicasIndex::class)->name('caracteristica.index');


Route::get('login', Login::class)->name('login');

Route::get('dashboard', Dashboard::class)->name('dashboard');


Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login'); // ou para onde deseja redirecionar
})->name('logout');
