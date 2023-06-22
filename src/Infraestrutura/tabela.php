<?php
# TRATA-SE DE UMA FORMA RÁPIDA PARA REINICIAR O BANCO DE DADOS EM AMBIENTE DE DESENVOLVIMENTO
# ESTE FICHEIRO NÃO DEVE ESTAR DISPONÍVEL EM PRODUÇÃO

# INSERE DADOS DA CONEXÃO COM O PDO UTILIZANDO SQLITE

require __DIR__ . '/Conexao.php';

# APAGA TABELA SE ELA EXISTIR
$pdo->exec('DROP TABLE IF EXISTS utilizadores;');


echo 'Tabela utilizadores apagada!' . PHP_EOL;

# CRIA A TABELA UTILIZADORES
$pdo->exec(
    'CREATE TABLE utilizadores (
    id INTEGER PRIMARY KEY, 
    nome CHAR, 
    apelido CHAR, 
    nif CHAR, 
    telemovel CHAR, 
    email CHAR NOT NULL, 
    foto CHAR NULL, 
    administrador CHAR, 
    dono CHAR,
    palavra_passe CHAR);'
);

echo 'Tabela utilizadores criada!' . PHP_EOL;

# ABAIXO UM ARRAY SIMULANDO A DADOS DE UM UTILIZADOR 
$utilizador = [
    'nome' => 'André',
    'apelido' => 'Carvalho',
    'nif' => '294733167',
    'telemovel' => '962411461',
    'email' => 'andre.filipe.carvalho@outlook.pt',
    'foto' => null,
    'administrador' => true,
    'dono' => true,
    'palavra_passe' => 'Andre123'
];

# CRIPTOGRAFA PALAVRA PASSE
$utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);

# INSERE UTILIZADOR
$sqlCreate = "INSERT INTO 
    utilizadores (
        nome, 
        apelido, 
        nif, 
        telemovel, 
        email, 
        foto, 
        administrador, 
        dono, 
        palavra_passe) 
    VALUES (
        :nome, 
        :apelido, 
        :nif, 
        :telemovel, 
        :email, 
        :foto, 
        :administrador, 
        :dono,
        :palavra_passe
    )";

# PREPARA A QUERY
$PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

# EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
$sucesso = $PDOStatement->execute([
    ':nome' => $utilizador['nome'],
    ':apelido' => $utilizador['apelido'],
    ':nif' => $utilizador['nif'],
    ':telemovel' => $utilizador['telemovel'],
    ':email' => $utilizador['email'],
    ':foto' => $utilizador['foto'],
    ':administrador' => $utilizador['administrador'],
    ':dono' => $utilizador['dono'],
    ':palavra_passe' => $utilizador['palavra_passe']
]);
echo 'Utilizador padrão criado!';
# ABAIXO UM ARRAY SIMULANDO A DADOS DE UM UTILIZADOR 
$utilizador = [
    'nome' => 'Lucas',
    'apelido' => 'Cruz',
    'nif' => '294733168',
    'telemovel' => '962411462',
    'email' => 'lucas@gmail.com',
    'foto' => null,
    'administrador' => true,
    'dono' => true,
    'palavra_passe' => 'Lucas123'
];

# CRIPTOGRAFA PALAVRA PASSE
$utilizador['palavra_passe'] = password_hash($utilizador['palavra_passe'], PASSWORD_DEFAULT);

# INSERE UTILIZADOR
$sqlCreate = "INSERT INTO 
    utilizadores (
        nome, 
        apelido, 
        nif, 
        telemovel, 
        email, 
        foto, 
        administrador, 
        dono, 
        palavra_passe) 
    VALUES (
        :nome, 
        :apelido, 
        :nif, 
        :telemovel, 
        :email, 
        :foto, 
        :administrador, 
        :dono,
        :palavra_passe
    )";

# PREPARA A QUERY
$PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);

# EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
$sucesso = $PDOStatement->execute([
    ':nome' => $utilizador['nome'],
    ':apelido' => $utilizador['apelido'],
    ':nif' => $utilizador['nif'],
    ':telemovel' => $utilizador['telemovel'],
    ':email' => $utilizador['email'],
    ':foto' => $utilizador['foto'],
    ':administrador' => $utilizador['administrador'],
    ':dono' => $utilizador['dono'],
    ':palavra_passe' => $utilizador['palavra_passe']
]);
echo 'Utilizador padrão criado!';

$pdo->exec('DROP TABLE IF EXISTS info');
echo 'Tabela infos apagada!' . PHP_EOL;
# CRIA A TABELA UTILIZADORES
$pdo->exec(
    'CREATE TABLE info (
    id INTEGER PRIMARY KEY, 
    nome CHAR,  
    texto TEXT, 
    tipo CHAR,
    foto BLOB
    );'
);

$info = [
    'nome' => 'BIKE TOUR',
    'texto'=>'A beleza desta Bike Tour permite pedalar em locais de elevada natureza histórica',
    'tipo' => 'Programa Turistico',
    'foto' => null
];

# INSERE info
$sqlCreate = "INSERT INTO 
    info (
        nome, 
        texto, 
        tipo,
        foto
        ) 
    VALUES (
        :nome, 
        :texto, 
        :tipo, 
        :foto
    )";

# PREPARA A QUERY
$PDOStatement = $GLOBALS['pdo']->prepare($sqlCreate);
# EXECUTA A QUERY RETORNANDO VERDADEIRO SE CRIAÇÃO FOI FEITA
$sucesso2 = $PDOStatement->execute([
    ':nome' => $info['nome'],
    ':texto' => $info['texto'],
    ':tipo' => $info['tipo'],
    ':foto' => $info['foto']
]);
echo 'Tabela infos padrão criada!';
