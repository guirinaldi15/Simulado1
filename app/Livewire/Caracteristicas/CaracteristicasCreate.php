<?php
namespace App\Livewire\Caracteristicas;

use Livewire\Component;
use App\Models\CaracteristicaProduto;
use App\Models\Produto;

class CaracteristicasCreate extends Component
{
    public $produto_id, $cor, $textura, $peso, $unidade_medida;
    public $tamanho, $marca, $material, $modelo, $codigo_barras, $descricao;

    protected $rules = [
        'produto_id' => 'required|exists:produtos,id',
        'marca' => 'nullable|string|max:255',
        'modelo' => 'nullable|string|max:255',
        'codigo_barras' => 'nullable|string|max:255',
    ];

    public function store()
    {
        $this->validate();

        CaracteristicaProduto::create([
            'produto_id' => $this->produto_id,
            'cor' => $this->cor,
            'textura' => $this->textura,
            'peso' => $this->peso,
            'unidade_medida' => $this->unidade_medida,
            'tamanho' => $this->tamanho,
            'marca' => $this->marca,
            'material' => $this->material,
            'modelo' => $this->modelo,
            'codigo_barras' => $this->codigo_barras,
            'descricao' => $this->descricao,
        ]);

        session()->flash('success', 'Características vinculadas com sucesso!');
        return redirect()->to('/produto');
    }

    public function render()
    {
        return view('livewire.caracteristicas.caracteristicas-create', [
            'produtos' => Produto::all()
        ]);
    }
}


