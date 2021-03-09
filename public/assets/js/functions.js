// Função para mostrar alerts dinamico
function alertsTodoList(selector, msg, className){
    $(selector).show().html(msg).toggleClass(className)
}