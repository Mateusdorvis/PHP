var caixa_texto =  document.getElementsByTagName('textarea')[0] //pega o primeiro textarea
//função para contar caracteres

var paragrafo = document.getElementById('contador')
caixa_texto.addEventListener('keyup', function (){
     var contar_tecla = caixa_texto.value.length
     paragrafo.innerHTML = `${contar_tecla} caractere${contar_tecla<=1 ? '' :'s'}`
})