<?php 
    //Começa ou continua uma sessão a partir do identificador passado atravez dos cockies ou com os metodos get ou post 
    session_start();

    require_once __DIR__ .'..\..\Infraestrutura\Repositorio.php';
    require_once __DIR__ .'/../Validacao/Registo.php';

    //Se for criado um metodo post do tipo utilizador
    if(isset($_POST['info'])){
        //e se esse metodo estiver como registo
        if($_POST['info']=='registo'){
            //então criamos um utilizador com o post que nos foi enviado
            registo($_POST);
        }
    }
function registo($requisicao)
{
    # VALIDA DADOS DO UTILIZADOR
    $dados = validarRegistoinfo($requisicao);

    # VERIFICA SE EXISTEM ERROS DE VALIDAÇÃO
    if (isset($dados['invalido'])) {

        # RECUPERA MENSAGEM DE ERRO, CASO EXISTA, E COLOCA EM SESSÃO PARA RECUPERANÃO NO FORMULARIO UTILIZADOR
        $_SESSION['erros'] = $dados['invalido'];

        # RECUPERA DADOS DO FORMULÁRIO PARA RECUPERAR PREENCHIMENTO ANTERIOR
        $params = '?' . http_build_query($requisicao);

        # REDIRECIONA UTILIZADOR COM DADOS DO FORMULÁRIO ANTERIORMENTE PREENCHIDO
        header('location: /../Pages/Registo/registo.php' . $params);
    } else {

        # GUARDA UTILIZADOR NA BASE DE DADOS (REPOSITÓRIO PDO)
        $info = registarinfo($dados);
    }
}

?>