-- BANCO DE DADOS UTILIZADO:
-- movieflix

-- TABELA: USUARIO

CREATE TABLE usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    telefone_cliente VARCHAR(20) NOT NULL,
    data_nascimento DATE,
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
    ativo BOOLEAN DEFAULT TRUE
);


-- TABELA: FILMES

CREATE TABLE filmes (
    id_filme INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    sinopse TEXT NOT NULL,
    genero VARCHAR(50) NOT NULL,
    ano_lancamento INT NOT NULL,
    duracao_minutos INT,
    classificacao_indicativa VARCHAR(10),
    preco_aluguel DECIMAL(6,2) NOT NULL,
    disponivel BOOLEAN DEFAULT TRUE,
    capa VARCHAR(255)
);

-- TABELA: ENDERECOS

CREATE TABLE enderecos (
    id_endereco INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    cep CHAR(8) NOT NULL,
    logradouro VARCHAR(100) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    complemento VARCHAR(50),
    bairro VARCHAR(60) NOT NULL,
    cidade VARCHAR(60) NOT NULL,
    uf CHAR(2) NOT NULL,

    FOREIGN KEY (id_usuario)
        REFERENCES usuario(id_usuario)
);

-- TABELA: CUPONS

CREATE TABLE cupons (
    id_cupom INT AUTO_INCREMENT PRIMARY KEY,
    id_filme INT NOT NULL,
    codigo VARCHAR(30) NOT NULL UNIQUE,
    descricao VARCHAR(150) NOT NULL,
    valor_desconto DECIMAL(6,2) NOT NULL
        CHECK (valor_desconto > 0),
    
    data_inicio DATETIME NOT NULL,

    data_expiracao DATETIME NOT NULL
        CHECK (data_expiracao > data_inicio),

    limite_uso INT
        CHECK (limite_uso IS NULL OR limite_uso > 0),

    usos_realizados INT NOT NULL DEFAULT 0
        CHECK (usos_realizados >= 0),

    ativo BOOLEAN NOT NULL DEFAULT TRUE,

    FOREIGN KEY (id_filme)
        REFERENCES filmes(id_filme)
);

-- TABELA: ALUGUEL

CREATE TABLE aluguel (
    id_aluguel INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_filme INT NOT NULL,
    id_cupom INT NULL,
    quantidade INT NOT NULL DEFAULT 1
        CHECK (quantidade >= 1),
    data_aluguel DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    data_expiracao DATETIME,
    status VARCHAR(20) NOT NULL DEFAULT 'ativo',

    FOREIGN KEY (id_usuario)
        REFERENCES usuario(id_usuario),

    FOREIGN KEY (id_filme)
        REFERENCES filmes(id_filme),

    FOREIGN KEY (id_cupom)
        REFERENCES cupons(id_cupom)
);

-- TABELA: AVALIACAO

CREATE TABLE avaliacao (
    id_avaliacao INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_filme INT NOT NULL,
    nota INT NOT NULL CHECK (nota BETWEEN 1 AND 5),
    comentario TEXT,
    data_avaliacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (id_usuario)
        REFERENCES usuario(id_usuario),

    FOREIGN KEY (id_filme)
        REFERENCES filmes(id_filme),

    UNIQUE (id_usuario, id_filme)
);

-- TABELA: CONTATO

CREATE TABLE contato (
    id_contato INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    assunto VARCHAR(50) NOT NULL,
    mensagem TEXT NOT NULL,
    data_envio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);
