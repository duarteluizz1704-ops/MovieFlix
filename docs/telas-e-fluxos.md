# Telas e Fluxos — MovieFlix

Este documento apresenta o mapa de telas do MovieFlix, explicando quais páginas fazem parte do sistema, quem pode acessá-las, suas funcionalidades e como elas se conectam.

O objetivo é demonstrar os caminhos que os usuários percorrem para utilizar as principais funcionalidades, desde o acesso inicial até a realização de aluguéis e o gerenciamento administrativo.

## 1. Mapa de telas

Cada tela do MovieFlix corresponde a uma página PHP responsável por apresentar determinada funcionalidade do sistema.

| Tela | Arquivo | Quem acessa | O que faz |
|------|---------|-------------|-----------|
| Início | `index.php` | Todos | Apresenta o MovieFlix, com banner, destaques, filmes mais alugados, categorias e avaliações. O menu permite acessar as demais páginas. |
| Catálogo | `produto.php` | Todos | Apresenta os filmes disponíveis, suas informações, preços, categorias e avaliações. Permite pesquisar e consultar os filmes. |
| Sobre | `sobre.php` | Todos | Apresenta informações sobre o MovieFlix, sua finalidade e o funcionamento da plataforma. |
| Contato | `contato.php` | Todos | Apresenta informações de contato e um formulário para envio de mensagens. Os dados são armazenados na tabela `contato`. |
| Cadastro | `cadastro.php` | Visitantes | Permite criar uma conta informando nome, e-mail, telefone, data de nascimento e senha. Novos cadastros recebem o tipo de usuário cliente. |
| Login | `login.php` | Visitantes | Permite acessar uma conta cadastrada utilizando e-mail e senha. Após a autenticação, direciona o usuário conforme seu tipo de conta. |
| Dashboard | `dashboard.php` | Administradores | Apresenta informações administrativas, como quantidade de filmes, aluguéis, avaliações, faturamento e dados do catálogo. |

## 2. Arquivos que fazem parte de várias telas

Além das páginas principais, o MovieFlix possui arquivos compartilhados que auxiliam no funcionamento e na organização do sistema.

| Arquivo | Função |
|---------|--------|
| `header.php` | Apresenta o cabeçalho e o menu de navegação. Mostra as opções de acesso conforme o usuário esteja logado ou não e conforme seu tipo de conta. |
| `footer.php` | Apresenta o rodapé do site, com informações e links de navegação. |
| `includes/config.php` | Configura a conexão com o banco de dados utilizando PDO e inicia a sessão do usuário. |
| `assets/CSS/style.css` | Contém os estilos visuais utilizados nas páginas do MovieFlix. |
| `assets/JS/script.js` | Contém as funcionalidades JavaScript utilizadas nas páginas, como interações com formulários e menus. |
| `logout.php` | Encerra a sessão do usuário e realiza o redirecionamento após a saída do sistema. |

## 3. Arquivos que processam dados

Algumas páginas também são responsáveis por receber informações enviadas pelos formulários, validar os dados e realizar operações no banco de dados.

No MovieFlix, os formulários podem enviar os dados para a própria página ou para outro arquivo PHP responsável pelo processamento, conforme a implementação de cada funcionalidade.

| Arquivo | Método | Recebe | Faz |
|---------|--------|--------|-----|
| `cadastro.php` | POST | Nome, e-mail, telefone, data de nascimento, senha e confirmação de senha. | Valida os campos, verifica se o e-mail já está cadastrado, protege a senha com `password_hash()` e registra o usuário na tabela `usuario`. |
| `login.php` | POST | E-mail e senha. | Busca o usuário, verifica a senha com `password_verify()` e inicia a sessão quando os dados estão corretos. |
| `logout.php` | GET | — | Encerra a sessão do usuário e redireciona para a página de acesso. |
| `contato.php` | POST | Nome