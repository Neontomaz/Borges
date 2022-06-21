const credentials = ["root", 123]

/* 
const init = () => {
  const inputEmail = document.querySelector('#exampleInputEmail1');
  const inputPass = document.querySelector('#exampleInputPassword1');
  const subbuton = document.querySelector('#btn');

  subbuton.addEventListener('click', () => {
    
  if(inputEmail.value === credentials[0] && credentials[1] === parseInt(inputPass.value, 10)){

    window.location.href = "http://127.0.0.1:5500/home.html"
   } else {
    alert("Login ou Senha errado")
   }

  })

}*/


const motorista = document.querySelector('#nomeMotor')

function mudar() {
  var select = document.getElementById('onibus');
  var optionValue = select.options[select.selectedIndex];

  var value = optionValue.value
  var text = optionValue.text

  motorista.innerHTML = value
  
}
 mudar()


/*
window.onload = init;


<script>
    
 var select = document.getElementById("buscador");
 select.addEventListener('click', async ()=>{

 var opcaoTexto = select.options[select.selectedIndex].text;
 var opcaoValor = select.options[select.selectedIndex].value;
 console.log(opcaoTexto); // Ferrari
 console.log(opcaoValor); // ferrari
});
</script>

*/