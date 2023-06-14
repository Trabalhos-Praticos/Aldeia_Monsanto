<?php

####################
### DEPENDÊNCIAS ###
####################
require_once __DIR__ . '../../Infraestrutura/Repositorio.php';
require_once __DIR__ . '../../Validacao/validar-utilizador.php';
require_once __DIR__ . '../../validacao/validar-palavra-passe.php';
require_once __DIR__ . '../../auxiliadores/auxiliador.php';


##############
### VERBOS ###
##############

# VERBOS POST
## CONTROLA A ROTA PARA CRIAÇÃO E ATUALIZAÇÃO DE UM UTILIZADOR NA PÁGINA UTILIZADOR
if (isset($_POST['info'])) {

    ## CONTROLA A CRIAÇÃO DE NOVOS UTILIZADORES
    if ($_POST['info'] == 'criar') {

        # CRIA UM UTILIZADOR
        criar($_POST);
    }

    ## CONTROLA A ATUALIZAÇÃO DE DADOS DOS UTILIZADORES
    if ($_POST['info'] == 'atualizar') {

        # ATUALIZA UM UTILIZADOR
        atualizarinfo($_POST);
    }
}

# VERBOS GET
## CONTROLA A ROTA PARA O CARREGAMENTO DE UM UTILIZADOR NA PÁGINA ATUALIZAR-UTILIZADOR
if (isset($_GET['info'])) {

    ## CONTROLA A ROTA PARA A CRIAÇÃO DE NOVOS UTILIZADORES
    if ($_GET['info'] == 'atualizar') {

        # RECUPERA DADOS DO UTILIZADOR PELO ID RECEBIDO
        $info = lerinfo($_GET['id']);

        # CRIA A SESSÃO AÇÃO ATUALIZAR PARA MANIPULAR O BOTÃO DE ENVIO DO FORMULÁRIO UTILIZADOR
        # ESSA ESTRATÉGIA FOI EXPLICADO NO FICHEIRO UTILIZADOR.PHP
        $utilizador['acao'] = 'atualizar';

        # ENVIA PARÂMETROS COM DADOS DO UTILIZADOR PARA A PÁGINA UTILIZADOR RECUPERAR DADOS PARA MANIPULAR A ALTERAÇÃO
        $params = '?' . http_build_query($utilizador);

        header('location: /src/Pages/CrudSitios/infosPerfil.php' . $params);
    }

        # DELETA UTILIZADOR
        $sucesso = deletarinfo($utilizador);

        # REDIRECIONA UTILIZADOR PARA PÁGINA ADMIN COM MENSAGEM DE SUCCESO
        if ($sucesso) {
            # DEFINE MENSAGEM DE SUCESSO
            $_SESSION['sucesso'] = 'Utilizador deletado com sucesso!';

            # REDIRECIONA UTILIZADOR COM DADOS DO FORMULÁRIO ANTERIORMENTE PREENCHIDO
            header('location: /src/Pages/CrudSitios/index.php');
            
        }
}

###############
### FUNÇÕES ###
###############

/**
 * FUNÇÃO RESPONSÁVEL POR CRIAR UM NOVO UTILIZADOR
 */
function criar($requisicao)
{
    # VALIDA DADOS DO UTILIZADOR. FICHEIRO VALIDAÇÃO->APLICAÇAO->ADMIN->VALIDAR-UTILIZADOR.PHP
    $dados = infoValida($requisicao);

    # VERIFICA SE EXISTEM ERROS DE VALIDAÇÃO
    if (isset($dados['invalido'])) {

        # RECUPERA MENSAGEM DE ERRO, CASO EXISTA, E COLOCA EM SESSÃO PARA RECUPERANÃO NO FORMULARIO UTILIZADOR
        $_SESSION['erros'] = $dados['invalido'];

        # RECUPERA DADOS DO FORMULÁRIO PARA RECUPERAR PREENCHIMENTO ANTERIOR
        $params = '?' . http_build_query($requisicao);

        # REDIRECIONA UTILIZADOR COM DADOS DO FORMULÁRIO ANTERIORMENTE PREENCHIDO
        header('location: /src/Pages/CrudSitios/infosPerfil.php' . $params);

        return false;
    }

    # GARDA FOTO EM DIRETÓRIO LOCAL (FUNÇÃO LOCAL)
    $dados = guardaFotoinfo($dados);

    # GUARDA UTILIZADOR NA BASE DE DADOS (REPOSITÓRIO PDO)
    $sucesso = registarinfo($dados);

    # REDIRECIONA UTILIZADOR PARA PÁGINA DE REGISTO COM MENSAGEM DE SUCCESO
    if ($sucesso) {

        # DEFINE MENSAGEM DE SUCESSO
        $_SESSION['sucesso'] = 'info criado com sucesso!';

        # REDIRECIONA O UTILIZADO PARA A PÁGINA ADMIN
        header('location: /src/Pages/CrudSitios/index.php');
        
    }
}

/**
 * FUNÇÃO RESPONSÁVEL POR ATUALIZAR UMA INFO
 */
function atualizarinfo($requisicao)
{
    # VALIDA DADOS DO UTILIZADOR
    $dados = infoValida($requisicao);

    # VERIFICA SE EXISTEM ERROS DE VALIDAÇÃO
    if (isset($dados['invalido'])) {

        # RECUPERA MENSAGEM DE ERRO, CASO EXISTA
        $_SESSION['erros'] = $dados['invalido'];

        # CRIA A SESSÃO AÇÃO ATUALIZAR PARA MANIPULAR O BOTÃO DE ENVIO DO FORMULÁRIO UTILIZADOR
        $_SESSION['acao'] = 'atualizar';

        # RECUPERA DADOS DO FORMULÁRIO PARA RECUPERAR PREENCHIMENTO ANTERIOR
        $params = '?' . http_build_query($requisicao);

        # REDIRECIONA UTILIZADOR COM DADOS DO FORMULÁRIO ANTERIORMENTE PREENCHIDO
        header('location: /src/Pages/CrudSitios/infosPerfil.php' . $params);

        return false;
    }

    # GARDA FOTO EM DIRETÓRIO LOCAL E APAGA A FOTO ANTIGA ORIUNDA DA REQUISIÇÃO (FUNÇÃO LOCAL)
    if (!empty($_FILES['foto']['name'])) {
        $dados = guardaFotoinfo($dados, $requisicao);
    }

    # ATUALIZA UTILIZADOR (REPOSITÓRIO PDO)
    $sucesso = atualizarinfo($dados);

    # REDIRECIONA UTILIZADOR PARA PÁGINA DE ALTERAÇÃO COM MENSAGEM DE SUCCESO
    if ($sucesso) {

        # DEFINE MENSAGEM DE SUCESSO
        $_SESSION['sucesso'] = 'Utilizador alterado com sucesso!';

        # DEFINI BOTÃO DE ENVIO DO FORMULÁRIO
        $dados['acao'] = 'atualizar';

        # RECUPERA DADOS DO FORMULÁRIO PARA RECUPERAR PREENCHIMENTO ANTERIOR
        $params = '?' . http_build_query($dados);

        # REDIRECIONA UTILIZADOR COM DADOS DO FORMULÁRIO ANTERIORMENTE PREENCHIDO
        header('location: /src/Pages/CrudSitios/infosPerfil.php' . $params);
    }
}



/**
 * FUNÇÃO RESPONSÁVEL POR DELETAR UM UTILIZADOR
 */
function deleteinfo($info)
{
    # DEFINE O CAMINHO DO FICHEIRO
    $caminhoFicheiro = __DIR__ . '/src/Assets/Uploads';

    # VALIDA DADOS DO UTILIZADOR
    $retorno = deletarinfo($info['id']);

    # COMANDO PARA APAGAR O FICHEIRO
    unlink($caminhoFicheiro . $info['foto']);

    # RETORNA RESULTADO DO BANCO DE DADOS
    return $retorno;
}

/**
 * FUNÇÃO RESPONSÁVEL POR GARDAR FICHEIROS DE FOTOS NO DIRETÓRIO
 */
function guardaFotoinfo($dados, $fotoAntiga = null)
{
    # UTILIZA VARIÁVEL GLOBAL PARA PEGAR O NOME DO FICHEIRO
    $nomeFicheiro = $_FILES['foto']['name'];

    # PAGA O FICHEIRO TEMPORÁRIO
    $ficheiroTemporario = $_FILES['foto']['tmp_name'];

    # PEGA TIPO DE EXTENSÃO DA FOTO
    $extensao = pathinfo($nomeFicheiro, PATHINFO_EXTENSION);

    # CONVERTE A EXTENSÃO PARA MINÚSCULO
    $extensao = strtolower($extensao);

    # CRIA UM NOME ÚNICO PARA O FICHEIRO
    $novoNome = uniqid('foto_') . '.' . $extensao;

    # DEFINE O CAMINHO DO FICHEIRO
    $caminhoFicheiro = __DIR__ . '/src/Assets/Uploads';

    # DEFINE CAMINHO COMPLETO DO FICHEIRO
    $ficheiro = $caminhoFicheiro . $novoNome;

    # MOVE O FICHEIRO TEMPORÁRIO PARA O LOCAL DEFINITIVO
    if (move_uploaded_file($ficheiroTemporario, $ficheiro)) {

        # ATRIBUI NOME DO FICHEIRO NO ARRAY DE DADOS PARA ARMAZENAMENTO NA BASE DE DADOS
        $dados['foto'] = $novoNome;

        # APAGA FICHEIRO ANTERIOR, CASO SEJA UMA ATUALIZAÇÃO DE FOTO DE PERFIL
        if (isset($dados['info']) && ($dados['info'] == 'atualizar') || ($dados['info'] == 'foto')) {

            # COMANDO PARA APAGAR O FICHEIRO
            unlink($caminhoFicheiro . $fotoAntiga['foto']);
        }
    }

    # RETORNA OS DADOS DO FICHEIRO PARA GARDAR NA BASE DE DADOS
    return $dados;
}
