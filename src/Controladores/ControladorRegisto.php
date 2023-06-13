<?php 
    //Começa ou continua uma sessão a partir do identificador passado atravez dos cockies ou com os metodos get ou post 
    session_start();

    require_once __DIR__ .'/../Infraestrutura/Repositorio.php';
    require_once __DIR__ .'/../Validacao/Registo.php';

    //Se for criado um metodo post do tipo utilizador
    if(isset($_POST['utilizador'])){
        //e se esse metodo estiver como registo
        if($_POST['utilizador']=='registo'){
            //então criamos um utilizador com o post que nos foi enviado
            registo($_POST);
        }
    }
function registo($requisicao)
{
    # VALIDA DADOS DO UTILIZADOR
    $dados = validarRegisto($requisicao);

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
        $utilizador = registarUtilizador($dados);

        # REDIRECIONA UTILIZADOR PARA PÁGINA DE REGISTO COM MENSAGEM DE SUCCESO
        if ($utilizador) {

            # FAZ LOGIN DE UTILIZADOR
            $_SESSION['id'] = $utilizador['id'];
            $_SESSION['nome'] = $utilizador['nome'];
            
            // 30 Dias = Data atual + 60 minutos * 60 segundos * 24 horas * 30 dias
            setcookie("id", $dados['id'], time() + (60 * 60 * 24 * 30), "/");
            setcookie("nome", $dados['nome'], time() + (60 * 60 * 24 * 30), "/");



            # DEFINE MENSAGEM DE SUCESSO
            $_SESSION['sucesso'] = 'Bem-vindo(a) ao nosso sistema. Por vaor, atualize o seu perfil.';

            # REDIRECIONA O UTILIZADO PARA A PÁGINA ADMIN
            header('location: /../../aplicacao/perfil.php');
        }
    }
}
?>