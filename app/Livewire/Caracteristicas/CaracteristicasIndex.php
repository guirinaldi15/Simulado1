<?php

namespace App\Livewire\Caracteristicas;

use Livewire\Component;
use App\Models\CaracteristicaProduto;

class CaracteristicasIndex extends Component
{
    public function delete($id)
    {
        $caracteristica = CaracteristicaProduto::find($id);
        if ($caracteristica) {
            $caracteristica->delete();
            session()->flash('success', 'Especificações do produto removidas com sucesso!');
        }
    }

    public function render()
    {
        return view('livewire.caracteristicas.caracteristicas-index', [
            'caracteristicas' => CaracteristicaProduto::with('produto')->get()
        ]);
    }
}
