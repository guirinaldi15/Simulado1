<?php
namespace App\Livewire\Funcionarios;

use Livewire\Component;
use App\Models\Funcionario;

class FuncionariosIndex extends Component
{
    public function delete($id)
    {
        $funcionario = Funcionario::find($id);
        if ($funcionario) {
            $funcionario->delete();
            session()->flash('success', 'Funcionário excluído com sucesso!');
        }
    }

    public function render()
    {
        // Deixando o retorno limpo, sem o método ->layout() para evitar bugs no VS Code
        return view('livewire.funcionarios.funcionarios-index', [
            'funcionarios' => Funcionario::all()
        ]);
    }
}


