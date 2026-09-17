<div class="mt-3">
    <h2 class="mb-4">Gestão de Movimentações</h2>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="mb-3">
        <input type="text" wire:model.live='search' placeholder="Pesquisar..." class="form-control">
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Data</th>
                <th scope="col">Tipo</th>
                <th scope="col">Quantidade Atual</th>
                <th scope="col">Usuário</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movimentacoes as $movimentacao)
                <tr>
                    <th scope="row">{{ $movimentacao->id }}</th>
                    <td>{{ $movimentacao->produto->nome }}</td>
                    <td>{{ $movimentacao->quantidade }}</td>
                    <td>{{ \Carbon\Carbon::parse($movimentacao->data_movimentacao)->format('d/m/Y') }}</td>
                    <td>
                        @if ($movimentacao->tipo == 'entrada')
                            <span class="badge bg-primary">Entrada</span>
                        @else
                            <span class="badge bg-danger">Saída</span>
                        @endif
                    </td>
                    <td>{{ $movimentacao->produto->qtd_estoque }}</td>
                    <td>{{ $movimentacao->user->name }}</td>
                    <td>
                        <button wire:click='delete({{ $movimentacao->id }})'
                            class="btn btn-sm btn-danger">Excluir</button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>