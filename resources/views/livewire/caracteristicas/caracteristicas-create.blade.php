<div class="container mt-4" style="max-width: 800px;">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h4 class="fw-bold text-secondary mb-0">Cadastrar Características do Produto</h4>
            <a href="/caracteristicas" wire:navigate class="btn btn-sm btn-outline-secondary">Voltar</a>
        </div>
        <div class="card-body p-4">
            <form wire:submit.prevent="store">
                <!-- Seleção do Produto -->
                <div class="mb-4">
                    <label class="form-label fw-bold text-dark">Produto Alvo</label>
                    <select class="form-select @error('produto_id') is-invalid @enderror" wire:model="produto_id">
                        <option value="">Selecione o produto...</option>
                        @foreach($produtos as $p)
                            <option value="{{ $p->id }}">{{ $p->nome }}</option>
                        @endforeach
                    </select>
                    @error('produto_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="row">
                    <!-- Marca e Modelo -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold text-muted">Marca</label>
                        <input type="text" class="form-control" wire:model="marca">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold text-muted">Modelo</label>
                        <input type="text" class="form-control" wire:model="modelo">
                    </div>

                    <!-- Cor e Textura -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold text-muted">Cor</label>
                        <input type="text" class="form-control" wire:model="cor">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold text-muted">Textura</label>
                        <input type="text" class="form-control" wire:model="textura">
                    </div>

                    <!-- Peso e Unidade de Medida -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold text-muted">Peso</label>
                        <input type="text" class="form-control" wire:model="peso">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold text-muted">Unidade de Medida</label>
                        <input type="text" class="form-control" wire:model="unidade_medida" placeholder="Ex: kg, g">
                    </div>
                    <!-- Tamanho -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold text-muted">Tamanho</label>
                        <input type="text" class="form-control" wire:model="tamanho" placeholder="Ex: G, 42, 10x15cm">
                    </div>

                    <!-- Material e Código de Barras -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold text-muted">Material</label>
                        <input type="text" class="form-control" wire:model="material">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold text-muted">Código de Barras</label>
                        <input type="text" class="form-control" wire:model="codigo_barras">
                    </div>
                </div>

                <!-- Descrição -->
                <div class="mb-3">
                    <label class="form-label fw-semibold text-muted">Descrição / Observações</label>
                    <textarea class="form-control" rows="3" wire:model="descricao"></textarea>
                </div>

                <div class="d-flex gap-2 justify-content-end mt-4">
                    <a href="/caracteristicas" wire:navigate class="btn btn-light border">Cancelar</a>
                    <button type="submit" class="btn btn-success px-4">Salvar Especificações</button>
                </div>
            </form>
        </div>
    </div>
</div>
