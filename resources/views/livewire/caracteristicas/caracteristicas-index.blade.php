<div class="container-fluid mt-4">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h4 class="fw-bold text-secondary mb-0">Características Técnicas dos Produtos</h4>
            <a href="/caracteristicas/create" wire:navigate class="btn btn-success d-flex align-items-center gap-2">
                <i class="bi bi-plus-circle-fill"></i> Cadastrar Características
            </a>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" style="min-width: 1200px;">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">Produto</th>
                            <th>Marca / Modelo</th>
                            <th>Cor / Textura</th>
                            <th>Dimensões (Peso/Tam)</th>
                            <th>Material</th>
                            <th>Cód. Barras</th>
                            <th>Descrição</th>
                            <th class="text-end pe-4">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($caracteristicas as $c)
                        <tr>
                            <td class="ps-4">
                                <span class="fw-bold text-primary">{{ $c->produto->nome ?? 'Produto Removido' }}</span>
                            </td>
                            <td>
                                <span class="d-block fw-semibold">{{ $c->marca ?? '-' }}</span>
                                <small class="text-muted">{{ $c->modelo ?? '-' }}</small>
                            </td>
                            <td>
                                <span class="badge bg-light text-dark border me-1">{{ $c->cor ?? '-' }}</span>
                                <small class="text-muted d-block">{{ $c->textura ?? '-' }}</small>
                            </td>
                            <td>
                                <span class="d-block">{{ $c->peso ?? '-' }} {{ $c->unidade_medida ?? '' }}</span>
                                <small class="text-muted">Tam: {{ $c->tamanho ?? '-' }}</small>
                            </td>
                            <td>{{ $c->material ?? '-' }}</td>
                            <td><code class="text-dark">{{ $c->codigo_barras ?? '-' }}</code></td>
                            <td>
                                <small class="text-wrap d-block text-truncate" style="max-width: 200px;" title="{{ $c->descricao }}">
                                    {{ $c->descricao ?? '-' }}
                                </small>
                            </td>
                            <td class="text-end pe-4">
                                <button wire:click="delete({{ $c->id }})" 
                                        onclick="confirm('Remover estas características?') || event.stopImmediatePropagation()" 
                                        class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash-fill"></i> Deletar
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-4">Nenhuma característica de produto cadastrada.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
