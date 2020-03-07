var add = document.querySelector('#add')
add.addEventListener('click', adicionaLembrete)
var cont = 1

var date = document.querySelector('#date')
var yesterday = document.querySelector('#yesterday')
var today = document.querySelector('#today')
var tomorrow = document.querySelector('#tomorrow')

yesterday.addEventListener('click', mudaDia(1))
today.addEventListener('click', mudaDia(2))
tomorrow.addEventListener('click', mudaDia(3))

function adicionaLembrete ( ) {

    cont++
    var divAtual = 'div' + cont

    document.getElementById(divAtual).style.display = 'block'

}

/*
function mudaDia (dia) {

    if (dia == 1){

        document.getElementById("teste").innerHTML = "<?php echo date('d/m/y');?>"

    }else{

        document.getElementById("teste").innerHTML = "<?php echo date('d/m/y');?>"

    }

}

*/
