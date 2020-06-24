var texto = "Olá! Sou a Tess, Clique sobre o botão (Switch) para alterar a cor da interface.";
var result;

var count = 0;
function digitar() {
  result = document.getElementById("result");
  window.setTimeout(function() { inserir(texto[count]) }, 200);
}

function inserir(letra) {
  result.innerHTML += letra;
  count++;
  if(count < texto.length)
    window.setTimeout(function() { inserir(texto[count]) }, 100);
}

window.onload = digitar;