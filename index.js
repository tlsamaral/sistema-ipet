var selecionar = document.querySelector('#selectItem');
var form = document.querySelector('#racaForm');

function list(){
  console.log(selecionar.value)
  switch(selecionar.value){
    case '0':
     alert('Selecione um animal');
    
    break;

    case 'Cachorro':

     form.innerHTML = `  <label for="raca">Raça do cachorro</label>
     <select class="form-control" name="raca_pet" id="selectItem">
     <option id="Cachorro" >Selecione uma raça</option>
 <option>buldogue</option>
 <option>Poodle</option>
 <option>Afegão Hound</option>
 <option>Affenpinscher</option>
 <option>Airedale Terrier</option>
 <option>Akita</option>
 <option>Pastor-alemão</option>
 <option>Pastor-alemão</option>
 <option>Pastor-alemão</option>
 <option>Pastor-alemão</option>
 <option>Pastor-alemão</option>
 <option>Pastor-alemão</option>
 <option>Pastor-alemão</option>
 <option>Pastor-alemão</option>
 <option>Desconhecida</option>
     </select>
    `;
    break;

    case 'Gato':

     form.innerHTML = `  <label for="raca">Raça do gato</label>
     <select class="form-control" name="raca_pet" id="selectItem">
     <option id="Cachorro" value="0">Selecione uma raça</option>
 <option>Persa</option>
 <option>Himalaia</option>
 <option>Siamês</option>
 <option>Desconhecida</option>
    `;
    break;

    
  }
}
selecionar.addEventListener('change', list)

