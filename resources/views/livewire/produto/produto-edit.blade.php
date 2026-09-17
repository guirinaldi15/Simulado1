<div class='mt-5'>
   <form class="row g-3" wire:submit.prevent="update">
  <div class="col-12">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome" placeholder="Nome" wire:model="nome">
  </div>
  <div class="col-12">
    <label for="inputValor" class="form-label">Valor</label>
    <input type="text" class="form-control" id="inputValor" placeholder="Valor" wire:model="valor">
  </div>
  <div class="col-md-12">
    <label for="inputQtdEstoque" class="form-label">Qtd. Estoque</label>
    <input type="text" class="form-control" id="inputQtdEstoque" wire:model="qtd_estoque">
  </div>
  <div class="col-md-12">
    <label for="inputQtdMinima" class="form-label">Qtd. Mínima</label>
    <input type="text" class="form-control" id="inputQtdMinima" wire:model="qtd_minima">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
</div>