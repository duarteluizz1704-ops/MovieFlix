# Telas e Fluxos — MovieFlix

Este documento apresenta o mapa de telas do MovieFlix, explicando quais páginas fazem parte do sistema, quem pode acessá-las, suas funcionalidades e como elas se conectam.

O objetivo é demonstrar os caminhos que os usuários percorrem para utilizar as principais funcionalidades, desde o acesso inicial até a realização de aluguéis e o gerenciamento administrativo.

## 1. Mapa de telas

Cada tela do MovieFlix corresponde a uma página PHP responsável por apresentar determinada funcionalidade do sistema.

| Tela | Arquivo | Quem acessa | O que faz |

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

| `cadastro.php` | POST | Nome, e-mail, telefone, data de nascimento, senha e confirmação de senha. | Valida os campos, verifica se o e-mail já está cadastrado, protege a senha com `password_hash()` e registra o usuário na tabela `usuario`. |
| `login.php` | POST | E-mail e senha. | Busca o usuário, verifica a senha com `password_verify()` e inicia a sessão quando os dados estão corretos. |
| `logout.php` | GET | — | Encerra a sessão do usuário e redireciona para a página de acesso. |
| `contato.php` | POST | Nome, e-mail, assunto e mensagem. | Recebe e valida os dados do formulário e registra a mensagem na tabela `contato`. |


## 4. Fluxo principal: realizar um aluguel

O fluxo abaixo demonstra o caminho que um cliente percorre para realizar o aluguel de um filme no MovieFlix.

O processo acontece da seguinte maneira:

1. O usuário acessa a página inicial do MovieFlix.
2. Caso ainda não esteja autenticado, acessa a página de login.
3. Informa seu e-mail e sua senha.
4. Após a autenticação, é direcionado para a área correspondente à sua conta.
5. Acessa o catálogo de filmes.
6. Escolhe um filme e consulta suas informações.
7. Inicia o processo de aluguel.
8. Caso tenha um cupom válido, pode informá-lo para obter o desconto correspondente.
9. Confirma o aluguel.
10. O sistema registra a operação no banco de dados, relacionando o usuário, o filme e o cupom utilizado, quando houver.

Após o registro, o aluguel poderá ser consultado na área correspondente do usuário, conforme as funcionalidades disponíveis.

## 5. Fluxo de acesso: cadastro, login e logout

O acesso ao MovieFlix depende do tipo de usuário e da autenticação realizada.

As verificações principais são:

- **O usuário possui cadastro?** Caso ainda não possua uma conta, deverá acessar a página de cadastro.
- **Os dados de login estão corretos?** O sistema verifica o e-mail e a senha informados. Caso estejam incorretos, apresenta uma mensagem de erro.
- **O usuário é administrador?** Após a autenticação, o sistema verifica o campo `tipo_usuario` da tabela `usuario`.
- **Qual página será aberta?** O administrador é direcionado para a área administrativa, enquanto o cliente acessa a área destinada aos usuários.

Quando o usuário seleciona a opção **Sair**, o sistema encerra a sessão e impede o acesso às páginas que exigem autenticação até que seja realizado um novo login.

## 6. Fluxo de avaliação de filmes

O fluxo de avaliação permite que um cliente registre sua opinião sobre um filme.

1. O usuário realiza o login no MovieFlix.
2. Acessa o catálogo e escolhe um filme.
3. Localiza a área de avaliações.
4. Seleciona uma nota entre 1 e 5 estrelas.
5. Escreve um comentário, caso deseje.
6. Envia a avaliação.
7. O sistema registra os dados na tabela `avaliacao`.

A tabela possui uma restrição que impede que o mesmo usuário realize mais de uma avaliação para o mesmo filme.

## 7. Fluxo administrativo

O fluxo administrativo é destinado aos usuários que possuem o tipo de conta `admin`.

1. O administrador acessa a página de login.
2. Informa suas credenciais.
3. O sistema verifica os dados e identifica o tipo de usuário.
4. Após a autenticação, o administrador acessa o Dashboard.
5. No painel, consulta informações sobre filmes, aluguéis, avaliações e faturamento.
6. Utiliza as opções administrativas disponíveis para acompanhar e gerenciar o sistema.

O acesso às funcionalidades administrativas é protegido por verificações de sessão e de tipo de usuário. Clientes não devem conseguir acessar essas páginas diretamente.

## 8. Relação entre as principais telas

As páginas do MovieFlix estão conectadas por meio do menu de navegação, botões, links e redirecionamentos.

| Tela de origem | Ação realizada | Tela de destino |

| Início | Clicar em Login | Login |
| Início | Clicar em Catálogo | Catálogo |
| Início | Clicar em Sobre | Sobre |
| Início | Clicar em Contato | Contato |
| Login | Clicar em Cadastre-se | Cadastro |
| Login | Realizar autenticação como cliente | Início ou área do cliente |
| Login | Realizar autenticação como administrador | Dashboard |
| Cadastro | Finalizar cadastro | Login |
| Catálogo | Selecionar um filme | Detalhes ou área de aluguel, conforme a implementação |
| Catálogo | Iniciar aluguel | Processo de aluguel |
| Dashboard | Selecionar Gerenciar filmes | Área de gerenciamento de filmes |
| Dashboard | Selecionar Aluguéis | Área de aluguéis administrativos |
| Dashboard | Selecionar Avaliações | Área de avaliações administrativas |
| Qualquer página autenticada | Clicar em Sair | Login ou página inicial |

## 9. Telas planejadas

As funcionalidades abaixo podem ser adicionadas ou aprimoradas em versões futuras do MovieFlix, caso ainda não estejam implementadas.

| Tela ou funcionalidade | Arquivo previsto | O que fará |

| Avaliações | `avaliacoes.php` | Permite consultar e acompanhar as avaliações cadastradas pelos usuários. |
| Gerenciar filmes | `gerenciar-filmes.php` | Área destinada ao gerenciamento dos filmes cadastrados no catálogo, conforme as funcionalidades implementadas. |
| Perfil | `perfil.php` | Apresentará as informações da conta do usuário e as opções de consulta ou edição disponíveis. |
| Aluguéis | `alugueis.php` | Permitirá consultar os registros de aluguéis realizados no sistema. |
| Recuperação de senha | `recuperar-senha.php` | Permitirá solicitar a recuperação da senha da conta. |
| Detalhes do filme | `detalhes-filme.php` | Apresentará informações completas de um filme selecionado. |
| Histórico de aluguéis | `meus-alugueis.php` | Permitirá que o cliente consulte seus aluguéis anteriores e atuais. |
| Gerenciamento de cupons | `gerenciar-cupons.php` | Permitirá que o administrador cadastre, edite e desative cupons. |

## 10. Capturas de tela

As capturas de tela utilizadas para documentar as páginas do MovieFlix ficam armazenadas na pasta `telas/`, localizada na raiz do projeto.

Os arquivos podem ser utilizados para ilustrar o manual do usuário e demonstrar visualmente as telas descritas neste documento.

Exemplos:

| Arquivo | Tela representada |

| `inicio.png` | Página inicial |
| `login.png` | Página de login |
| `cadastro.png` | Página de cadastro |
| `produto.png` | Catálogo de filmes |
| `dashboard.png` | Painel administrativo |
| `contato.png` | Página de contato |

## 11. Considerações finais

O mapa de telas e os fluxos apresentados neste documento demonstram como as principais páginas do MovieFlix se relacionam e como os diferentes tipos de usuários navegam pelo sistema. A organização das telas permite separar as funcionalidades destinadas aos clientes das funcionalidades administrativas, facilitando a utilização e a manutenção do projeto.