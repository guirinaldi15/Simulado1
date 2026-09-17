<?php

namespace App\Livewire\Movimentacao;

use App\Models\Movimentacao;
use Livewire\Component;

class MovimentacaoIndex extends Component
{
    public $movimentacoes;
    public function delete($id)
    {
        $movimentacao = Movimentacao::find($id);
        if ($movimentacao) {
            $movimentacao->delete();
            $this->movimentacoes = Movimentacao::with('produto', 'user')->orderBy('data_movimentacao', 'desc')->get();
        }
    }
     public function mount()
    {
        $this->movimentacoes = Movimentacao::with('produto', 'user')->orderBy('data_movimentacao', 'desc')->get();
    }

    
    public function render()
    {
        return view('livewire.movimentacao.movimentacao-index');
    }
}