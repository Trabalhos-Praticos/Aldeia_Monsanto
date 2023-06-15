<?php
    function validarRegistoInfo($requisicao)
    {
        # RETIRA ESPAÇOS VAZIOS
        foreach ($requisicao as $key => $value) {
            $requisicao[$key] =  trim($requisicao[$key]);
        }
    
        # VALIDANDO O CAMPO NOME
        if (empty($requisicao['nome']) || strlen($requisicao['nome']) < 3 || strlen($requisicao['nome']) >= 255) {
            $erros['nome'] = 'O campo Nome não pode estar vazio e deve ter entre 3 e 255 caracteres.';
        }
        # RETORNA ERROS
        if (isset($erros)) {
            return ['invalido' => $erros];
        }
        # RETORNA UTILIZADOR VALIDADO
        return $requisicao;
    }


?>