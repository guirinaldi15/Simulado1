<div class="container mt-4">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h4 class="fw-bold text-secondary mb-0">Gestão de Funcionários</h4>
            <a href="/funcionarios/create" wire:navigate class="btn btn-primary d-flex align-items-center gap-2">
                <i class="bi bi-person-plus-fill"></i> Cadastrar Funcionário
            </a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">Nome</th>
                            <th>CPF</th>
                            <th>Cargo</th>
                            <th class="text-end pe-4">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($funcionarios as $f)
                        <tr>
                            <td class="ps-4">
                                <span class="fw-semibold d-block">{{ $f->nome }}</span>
                                <small class="text-muted">{{ $f->email }}</small>
                            </td>
                            <td>{{ $f->cpf }}</td>
                            <td><span class="badge bg-light text-dark border">{{ $f->cargo }}</span></td>
                            <td class="text-end pe-4">
                                <button wire:click="delete({{ $f->id }})" 
                                        onclick="confirm('Tem certeza que deseja excluir?') || event.stopImmediatePropagation()" 
                                        class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash3-fill"></i> Excluir
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">Nenhum funcionário encontrado.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
