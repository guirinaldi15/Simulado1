<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h4 class="fw-bold text-secondary mb-0">Novo Funcionário</h4>
            <a href="/funcionarios" wire:navigate class="btn btn-sm btn-outline-secondary">Voltar</a>
        </div>
        <div class="card-body p-4">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label class="form-label fw-semibold text-muted">Nome Completo</label>
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" wire:model="nome">
                    @error('nome') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold text-muted">E-mail</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold text-muted">CPF</label>
                        <input type="text" class="form-control @error('cpf') is-invalid @enderror" wire:model="cpf">
                        @error('cpf') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold text-muted">Cargo</label>
                        <input type="text" class="form-control @error('cargo') is-invalid @enderror" wire:model="cargo">
                        @error('cargo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="d-flex gap-2 justify-content-end mt-4">
                    <a href="/funcionarios" wire:navigate class="btn btn-light border">Cancelar</a>
                    <button type="submit" class="btn btn-primary px-4">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
