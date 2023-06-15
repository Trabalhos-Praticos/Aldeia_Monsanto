
<?php
/**
 * FUNÇÃO RESPONSÁVEL PELA VALIDAÇÃO DE UMa info
 */
function infoValida($requisicao)
{
    # RETIRA ESPAÇOS VAZIOS
    foreach ($requisicao as $key => $value) {
        $requisicao[$key] =  trim($requisicao[$key]);
    }

    # VALIDANDO O CAMPO NOME
    if (empty($requisicao['nome']) || strlen($requisicao['nome']) < 3 || strlen($requisicao['nome']) > 255) {
        $erros['nome'] = 'O campo Nome não pode estar vazio e deve ter entre 3 e 255 caracteres.';
    }

    # VALIDANDO O CAMPO APELIDO
    if (empty($requisicao['texto']) || strlen($requisicao['texto']) < 3 || strlen($requisicao['texto']) > 255) {
        $erros['texto'] = 'O campo Texto não pode estar vazio e deve ter entre 3 e 255 caracteres.';
    }
    // # VALIDANDO O CAMPO APELIDO
    // if (empty($requisicao['tipo']) || strlen($requisicao['tipo']) < 3 || strlen($requisicao['tipo']) > 255) {
    //     $erros['tipo'] = 'O campo Tipo não pode estar vazio e deve ter entre 3 e 255 caracteres.';
    // }
    # RETORNA ERROS
    if (isset($erros)) {
        return ['invalido' => $erros];
    }

    # RETORNA UTILIZADOR VALIDADO
    return $requisicao;
}

?>