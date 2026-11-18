# Guia de Instalação - MovieFlix

## 1. Requisitos para executar o sistema

Para executar o MovieFlix corretamente, é necessário ter os seguintes programas e recursos instalados:

- XAMPP: ambiente de desenvolvimento local que disponibiliza o servidor Apache e o banco de dados MySQL/MariaDB.
- PHP: linguagem utilizada no desenvolvimento do sistema.
- MySQL/MariaDB: sistema de gerenciamento do banco de dados.
- Navegador: Google Chrome, Microsoft Edge ou outro navegador atualizado.
- Visual Studio Code (opcional): editor de código utilizado para visualizar e modificar os arquivos do projeto.

## 2. Instalação e preparação do XAMPP

O XAMPP é utilizado para executar o MovieFlix localmente, disponibilizando o servidor web Apache e o serviço de banco de dados.

Para instalar:

1. Acesse o site oficial: https://www.apachefriends.org/.
2. Baixe a versão do XAMPP compatível com o sistema operacional.
3. Execute o instalador baixado.
4. Durante a instalação, mantenha selecionados os componentes Apache, MySQL, PHP e phpMyAdmin.
5. Escolha o diretório de instalação. Por padrão, recomenda-se utilizar `C:\xampp`.
6. Finalize a instalação e abra o XAMPP Control Panel.

## 3. Colocando o projeto na pasta htdocs

Após instalar o XAMPP, é necessário colocar a pasta do MovieFlix no diretório utilizado pelo Apache para disponibilizar os projetos localmente.

Siga os passos:

1. Localize a pasta onde o projeto MovieFlix está armazenado.
2. Copie a pasta completa do projeto.
3. Acesse o diretório de instalação do XAMPP.
4. Entre na pasta `htdocs`.
5. Cole a pasta do projeto dentro desse diretório.

O caminho deverá ficar semelhante a:

C:\xampp\htdocs\MovieFlix\


A estrutura do projeto poderá ser organizada da seguinte maneira:


## 4. Inicializando Apache e MySQL

Com o XAMPP instalado e o projeto na pasta `htdocs`, é necessário iniciar os serviços.

1. Abra o XAMPP Control Panel.
2. Localize o módulo Apache e clique em Start.
3. Localize o módulo MySQL e clique em Start.
4. Aguarde até que os dois serviços indiquem que estão em execução.

Os serviços serão responsáveis por executar os arquivos PHP e permitir o acesso ao banco de dados.

## 5. Criando e importando o banco de dados

O MovieFlix utiliza um banco de dados MySQL chamado `movieflix`, responsável por armazenar os usuários, filmes, aluguéis, cupons, avaliações e mensagens de contato.

Para criar ou importar o banco:

1. Com o Apache e o MySQL iniciados, abra o navegador.
2. Acesse: http://localhost/phpmyadmin/
3. No phpMyAdmin, selecione a opção Importar.
4. Clique em Escolher arquivo.
5. Selecione o arquivo SQL do banco de dados do MovieFlix.
6. Clique em Importar ou Executar.
7. Após a importação, verifique se o banco `movieflix` foi criado e se as seis tabelas estão disponíveis:
- `usuario`
- `filmes`
- `cupons`
- `aluguel`
- `avaliacao`
- `contato`

## 6. Configurando a conexão PHP com MySQL

O MovieFlix utiliza PHP para realizar a comunicação com o banco de dados MySQL.

A conexão é configurada no arquivo:

includes/config.php

Esse arquivo deve conter as informações necessárias para estabelecer a conexão com o banco de dados.

Exemplo de configuração utilizando PDO:

<?php

$host = "localhost";
$banco = "movieflix";
$usuario = "root";
$senha = "";

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {

    die("Erro ao conectar ao banco de dados: " . $e->getMessage());

}

?>

## 7. Acessando o MovieFlix pelo navegador

Após iniciar o Apache e o MySQL, importar o banco de dados e configurar a conexão, o sistema poderá ser acessado pelo navegador.

Endereço principal:


http://localhost/MovieFlix/

Caso a página inicial não seja carregada automaticamente, também é possível acessar diretamente:

http://localhost/MovieFlix/index.php

O navegador exibirá a página inicial do MovieFlix, permitindo acessar as funcionalidades disponíveis no sistema.

## 8. Como testar se o sistema está funcionando

Para verificar se o MovieFlix está funcionando corretamente, recomenda-se realizar os seguintes testes:

1. Acesso à página inicial: verificar se o site abre sem apresentar erros.
2. Cadastro de usuário: realizar um cadastro e verificar se os dados foram armazenados na tabela `usuario`.
3. Login: testar o acesso utilizando um e-mail e uma senha cadastrados.
4. Catálogo: verificar se os filmes cadastrados aparecem corretamente na página de produtos.
5. Aluguel: realizar um aluguel e verificar se o registro aparece na tabela `aluguel`.
6. Avaliações: testar o envio de uma avaliação e verificar o registro na tabela `avaliacao`.
7. Contato: enviar uma mensagem pelo formulário e verificar se ela foi armazenada na tabela `contato`.
8. Área administrativa: acessar o sistema com uma conta de administrador e verificar se as funcionalidades administrativas estão disponíveis.

Os testes devem ser realizados com os serviços Apache e MySQL em execução.

## 9. Problemas comuns e suas soluções

| Problema | Possível causa | Solução |

| O site não abre no navegador. | Apache não está iniciado. | Abrir o XAMPP Control Panel e iniciar o Apache. |

| O MySQL não inicia. | Conflito de porta ou outro serviço utilizando a porta 3306. | Verificar se outro serviço está utilizando a porta e ajustar a configuração, se necessário. |

| Erro de conexão com o banco de dados. | Nome do banco, usuário ou senha incorretos. | Conferir as configurações do arquivo `includes/config.php`. |

| Banco de dados não encontrado. | O banco `movieflix` ainda não foi criado ou importado. | Acessar o phpMyAdmin e importar o arquivo SQL. |

| Página PHP apresenta erro. | Erro de sintaxe ou caminho incorreto de algum arquivo. | Verificar o código PHP e os caminhos dos arquivos incluídos. |

| Imagens não aparecem. | Caminho ou nome do arquivo incorreto. | Conferir os arquivos da pasta `assets/IMG/` e os caminhos utilizados no código. |

| Login não funciona. | E-mail ou senha incorretos, ou problema na validação. | Conferir os dados cadastrados e a implementação de `password_verify()`. |

| Acesso ao painel administrativo é negado. | Usuário cadastrado como cliente. | Verificar a coluna `tipo_usuario` na tabela `usuario` e confirmar se o usuário está definido como `admin`. |

## 10. Considerações finais

O MovieFlix foi desenvolvido para funcionar em ambiente local utilizando PHP, MySQL e XAMPP.

Seguindo as etapas deste documento, é possível preparar o ambiente, configurar o banco de dados e acessar o sistema pelo navegador.

Endereço de acesso: `http://localhost/MovieFlix/`

