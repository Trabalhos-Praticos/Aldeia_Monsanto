<?php
    function validarRegistoinfo($requisicao)
    {
        # RETIRA ESPAÇOS VAZIOS
        foreach ($requisicao as $key => $value) {
            $requisicao[$key] =  trim($requisicao[$key]);
        }
    
        # VALIDANDO O CAMPO NOME
        if (empty($requisicao['nome']) || strlen($requisicao['nome']) < 3 || strlen($requisicao['nome']) > 255) {
            $erros['nome'] = 'O campo Nome não pode estar vazio e deve ter entre 3 e 255 caracteres.';
        }
        # VALIDANDO O CAMPO texto
        if (empty($requisicao['texto']) || strlen($requisicao['text']) < 3 || strlen($requisicao['text']) > 400) {
            $erros['text'] = 'O campo Nome não pode estar vazio e deve ter entre 3 e 400 caracteres.';
        }
        # VALIDANDO O CAMPO tipo
        if (empty($requisicao['tipo']) || strlen($requisicao['tipo']) < 3 || strlen($requisicao['tipo']) > 400) {
            $erros['tipo'] = 'O campo Nome não pode estar vazio e deve ter entre 3 e 255 caracteres.';
        }
        
        # RETORNA ERROS
        if (isset($erros)) {
            return ['invalido' => $erros];
        }
    
        # RETORNA UTILIZADOR VALIDADO
        return $requisicao;
    }


?>