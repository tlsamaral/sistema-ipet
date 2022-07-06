var nEndereco = document.querySelector('#enderecoNovo');
var selectEnd = document.querySelector('#selectEnd');

function listaEndereco(){
    console.log(selectEnd.value)
    if (selectEnd.value != 'Outro')
    {
      nEndereco.innerHTML = `  
      <div class="row">
      <div class="col-6 mt-3">
      <label for="cidade">Cidade</label>
    <input type="text" name="cidade_usu" id="cidade" class="form-control" placeholder="Digite a cidade">
  </div>
  
  <div class="col-6 mt-3">
      <label for="bairro">Bairro</label>
    <input type="text" name="bairro_usu" id="bairro" class="form-control" placeholder="Digite o bairro">
  </div>
  </div>
  <div class="row">
  <div class="col-6 mt-3">
      <label for="rua">Rua</label>
    <input type="text" name="rua_usu" id="rua" class="form-control" placeholder="Digite a rua">
  </div>
  
  <div class="col-2 mt-3">
      <label for="numero">Numero</label>
    <input type="text" name="numero_usu" id="numero" class="form-control" placeholder="Número ">
  </div>
  
  <div class="col-4 mt-3">
      <label for="complemento">Complemento</label>
    <input type="text" name="complemento_usu" id="complemento" class="form-control" placeholder="Complemento">
  </div>

  </div>`
    }
    else if (selectEnd.value == 'Outro')
    {
      nEndereco.innerHTML = `  
      <div class="row">
      <div class="col-6 mt-3">
      <label for="cidade">Cidade</label>
    <input type="text" name="cidade_usu" id="cidade" class="form-control" placeholder="Digite a cidade">
  </div>
  
  <div class="col-6 mt-3">
      <label for="bairro">Bairro</label>
    <input type="text" name="bairro_usu" id="bairro" class="form-control" placeholder="Digite o bairro">
  </div>
  </div>
  <div class="row">
  <div class="col-6 mt-3">
      <label for="rua">Rua</label>
    <input type="text" name="rua_usu" id="rua" class="form-control" placeholder="Digite a rua">
  </div>
  
  <div class="col-2 mt-3">
      <label for="numero">Numero</label>
    <input type="text" name="numero_usu" id="numero" class="form-control" placeholder="Número ">
  </div>
  
  <div class="col-4 mt-3">
      <label for="complemento">Complemento</label>
    <input type="text" name="complemento_usu" id="complemento" class="form-control" placeholder="Complemento">
  </div>

  </div>`
    
    }else{}
  }
  
  
  selectEnd.addEventListener('change', listaEndereco)