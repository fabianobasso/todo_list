$(document).ready(() =>{

    $('#create-user').on('click', () => {
        $('#login').slideToggle(1000)
        $('#login-form').html('Cadastro')
        $('#cadastro').slideToggle(1000)
        $('.login-text').slideToggle(1000)
        $('.cadastro-text').slideToggle(1000)
    })

    $('#cancel-registry').on('click', () => {
        $('#login').slideToggle(1000)
        $('#login-form').html('Login')
        $('#cadastro').slideToggle(1000)
        $('.login-text').slideToggle(1000)
        $('.cadastro-text').slideToggle(1000)
    })

    // Open modal create database
    $('.btn-custom-config').on('click', () =>{
        $('#modal-db').fadeToggle(100)
        $('#modal-prin').toggle().animate({"top": "+=85px"}, 500)
        $('#line1').html(' ')
        $('#time-response').html(' ')
    })
    // Close modal create database
    $('.close-modal').on('click', () =>{
        $('#modal-db').fadeToggle()
        $('#modal-prin').toggle().animate({"top": "-=85px"}, 500)
    })
    
    // Config banco de dados sqlite
    $('#create-db').on('click', e =>{
        $('#line1').html(' ')
        $('#time-response').html(' ')
        let text = 'Criando o banco de dados'
        let el = document.getElementById('line1')
        typeWrite(text, el)     
        $.ajax({
            type: 'POST',
            url: 'router.php',
            data: 'directory=db&file=setupSqlite',
            success: dados => {
                if(dados == '1'){
                    setTimeout(() =>{
                        $('#time-response').html('O banco de dados não pode ser criado novamente porque já existe.')
                    }, 2000)
                    
                }else{
                    setTimeout(() =>{
                        $('#time-response').html('Status: Ok')
                    }, 1000)
                    setTimeout(() =>{
                        $('#line1').html(' ')
                        $('#time-response').html(' ')
                    }, 3000)
                    setTimeout(() =>{
                        text = 'Executando as query'
                        typeWrite('Executando as query', el)
                    }, 4000)
                    setTimeout(() =>{
                        $('#time-response').html('O Banco de dados foi criado com sucesso')
                    }, 6000)
                }
                
                
            },
            error: erro => {
                console.log(erro)
            }
        })
    })


    function typeWrite(str, el) {
        var char = str.split('').reverse();
        var typer = setInterval(function () {
        if (!char.length) return clearInterval(typer);
        var next = char.pop();
        el.innerHTML += next;
        }, 50);
    }

    function muda(el){
        el.innerHTML = 'Status Ok'
    }


})