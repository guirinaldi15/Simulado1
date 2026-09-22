<?php
namespace App\Livewire\Funcionarios;

use Livewire\Component;
use App\Models\Funcionario;

class FuncionariosCreate extends Component
{
    public $nome;
    public $email;
    public $cpf;
    public $cargo;

    protected $rules = [
        'nome' => 'required|string|max:255',
        'email' => 'required|email|unique:funcionarios,email',
        'cpf' => 'required|string|unique:funcionarios,cpf',
        'cargo' => 'required|string|max:255',
    ];

    public function store()
    {
        $this->validate();

        Funcionario::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'cargo' => $this->cargo,
        ]);

        session()->flash('success', 'Funcionário cadastrado com sucesso!');
        return redirect()->to('/funcionarios');
    }

    public function render()
    {
        return view('livewire.funcionarios.funcionarios-create');
    }
}
