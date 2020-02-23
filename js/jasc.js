var add = document.querySelector('#add')
add.addEventListener('click', adicionaLembrete)
var cont = 1

function adicionaLembrete ( ) {

    cont++
    var divAtual = 'div' + cont

    document.getElementById(divAtual).style.display = 'block'

}