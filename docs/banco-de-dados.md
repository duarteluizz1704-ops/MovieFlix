# Banco de dados — MovieFlix

Banco de dados `movieflix`, desenvolvido em MariaDB 10.4.32, utilizando o mecanismo de armazenamento InnoDB e o conjunto de caracteres `utf8mb4`.

O banco é responsável por armazenar as informações dos usuários, filmes disponíveis para aluguel, aluguéis realizados, cupons de desconto, avaliações e mensagens enviadas pelo formulário de contato.

Script de criação e estrutura: `database/movieflix.sql`

## DER

[DER do MovieFlix](der.png)

O Diagrama Entidade-Relacionamento (DER) apresenta as tabelas do banco de dados, seus principais campos e os relacionamentos entre elas.

## Como ler o DER

- PK (Primary Key): chave primária, identifica cada registro de forma única.
- FK (Foreign Key): chave estrangeira, estabelece uma ligação entre tabelas.
- UK (Unique Key): campo que não permite valores repetidos.
- 1:N: relacionamento em que um registro de uma tabela pode estar associado a vários registros de outra tabela.

## Relacionamentos entre as tabelas

- Um usuário pode realizar vários aluguéis. Cada aluguel pertence a um único usuário.
- Um filme pode aparecer em vários aluguéis. Cada aluguel está associado a um único filme.
- Um cupom pode ser utilizado em vários aluguéis. Um aluguel pode utilizar um cupom ou nenhum.
- Um usuário pode realizar várias avaliações. Cada avaliação pertence a um único usuário.
- Um filme pode receber várias avaliações. Cada avaliação está associada a um único filme.
- Um filme pode possuir vários cupons. Cada cupom está associado a um único filme.
- A tabela `contato` não possui relacionamento com as demais tabelas. Ela armazena as mensagens enviadas pelo formulário de contato.

## Resumo das tabelas

| Tabela | Para que serve |

| `usuario` | Armazena os dados dos clientes e administradores cadastrados. |
| `filmes` | Armazena as informações dos filmes disponíveis no catálogo. |
| `aluguel` | Registra os aluguéis realizados pelos usuários. |
| `cupons` | Armazena os cupons de desconto associados aos filmes. |
| `avaliacao` | Armazena as notas e os comentários dos usuários sobre os filmes. |
| `contato` | Armazena as mensagens enviadas pelo formulário de contato. |

## Dicionário de dados

### 1. usuario

Armazena os dados das pessoas cadastradas no MovieFlix, incluindo clientes e administradores. O campo `tipo_usuario` define o nível de acesso de cada usuário.

| Coluna | Tipo | Obrigatório | Chave | Descrição |

| `id_usuario` | INT, AUTO_INCREMENT | Sim | PK | Identificador único do usuário. |
| `nome` | VARCHAR(50) | Sim | — | Nome do usuário. |
| `email` | VARCHAR(255) | Sim | UK | E-mail utilizado para identificação e login. |
| `senha` | VARCHAR(255) | Sim | — | Senha armazenada em formato de hash. |
| `telefone_cliente` | VARCHAR(20) | Sim | — | Telefone de contato do usuário. |
| `data_nascimento` | DATE | Sim | — | Data de nascimento do usuário. |
| `data_cadastro` | DATETIME | Não | — | Data e hora do cadastro. Padrão: horário atual. |
| `ativo` | TINYINT(1) | Sim | — | Indica se a conta está ativa. Padrão: `1`. |
| `tipo_usuario` | ENUM('admin','cliente') | Sim | — | Define o tipo de usuário. Padrão: `'cliente'`. |
| `foto_perfil` | VARCHAR(255) | Não | — | Caminho da imagem de perfil. |

- O e-mail possui restrição `UNIQUE`, impedindo cadastros com o mesmo endereço.
- O campo `tipo_usuario` permite diferenciar administradores de clientes.
- O campo `senha` armazena o hash gerado pela função `password_hash()`, e não a senha em texto puro.

### 2. filmes

Armazena os dados dos filmes disponíveis no catálogo do MovieFlix, incluindo título, sinopse, gênero, ano de lançamento, duração, classificação indicativa e preço do aluguel.

| Coluna | Tipo | Obrigatório | Chave | Descrição |

| `id_filme` | INT, AUTO_INCREMENT | Sim | PK | Identificador único do filme. |
| `titulo` | VARCHAR(100) | Sim | — | Título do filme. |
| `sinopse` | TEXT | Sim | — | Descrição da história do filme. |
| `genero` | VARCHAR(50) | Sim | — | Gênero cinematográfico. |
| `ano_lancamento` | INT | Sim | — | Ano de lançamento do filme. |
| `duracao_minutos` | INT | Não | — | Duração do filme em minutos. |
| `classificacao_indicativa` | VARCHAR(10) | Não | — | Classificação indicativa do filme. |
| `preco_aluguel` | DECIMAL(6,2) | Sim | — | Valor cobrado pelo aluguel. |
| `disponivel` | TINYINT(1) | Não | — | Indica se o filme está disponível. Padrão: `1`. |
| `capa` | VARCHAR(255) | Não | — | Caminho da imagem de capa do filme. |

### 3. aluguel

Registra os aluguéis realizados pelos usuários. Cada registro identifica o usuário, o filme alugado, a quantidade, as datas e a situação do aluguel.

| Coluna | Tipo | Obrigatório | Chave | Descrição |

| `id_aluguel` | INT, AUTO_INCREMENT | Sim | PK | Identificador único do aluguel. |
| `id_usuario` | INT | Sim | FK -> `usuario.id_usuario` | Usuário responsável pelo aluguel. |
| `id_filme` | INT | Sim | FK -> `filmes.id_filme` | Filme alugado. |
| `id_cupom` | INT | Não | FK -> `cupons.id_cupom` | Cupom utilizado. Pode ser `NULL` quando não houver cupom. |
| `quantidade` | INT | Sim | — | Quantidade de unidades alugadas. Padrão: `1`, com mínimo de 1. |
| `data_aluguel` | DATETIME | Sim | — | Data e hora do aluguel. Padrão: horário atual. |
| `data_expiracao` | DATETIME | Não | — | Data e hora de expiração do aluguel. |
| `status` | VARCHAR(20) | Sim | — | Situação do aluguel. Padrão: `'ativo'`. |

### 4. cupons

Armazena os cupons de desconto disponibilizados no MovieFlix. Cada cupom está associado a um filme e possui código, valor de desconto, período de validade e limite de utilização.

| Coluna | Tipo | Obrigatório | Chave | Descrição |

| `id_cupom` | INT, AUTO_INCREMENT | Sim | PK | Identificador único do cupom. |
| `id_filme` | INT | Sim | FK -> `filmes.id_filme` | Filme ao qual o cupom está associado. |
| `codigo` | VARCHAR(30) | Sim | UK | Código utilizado para identificar o cupom. |
| `descricao` | VARCHAR(150) | Sim | — | Descrição do desconto. |
| `valor_desconto` | DECIMAL(6,2) | Sim | — | Valor do desconto, maior que zero. |
| `data_inicio` | DATETIME | Sim | — | Data e hora de início da validade. |
| `data_expiracao` | DATETIME | Sim | — | Data e hora de encerramento da validade. |
| `limite_uso` | INT | Não | — | Quantidade máxima de utilizações. Pode ser `NULL` para não definir limite. |
| `usos_realizados` | INT | Sim | — | Quantidade de vezes que o cupom foi utilizado. Padrão: `0`. |
| `ativo` | TINYINT(1) | Não | — | Indica se o cupom está ativo. Padrão: `1`. |

- O código do cupom possui restrição `UNIQUE`, impedindo códigos repetidos.
- A data de expiração deve ser posterior à data de início.
- O limite de uso, quando informado, deve ser maior que zero.

### 5. avaliacao

Armazena as avaliações realizadas pelos usuários sobre os filmes. Cada avaliação contém uma nota de 1 a 5, um comentário opcional e a data em que foi registrada.

| Coluna | Tipo | Obrigatório | Chave | De

| `id_avaliacao` | INT, AUTO_INCREMENT | Sim | PK | Identificador único da avaliação. |
| `id_usuario` | INT | Sim | FK -> `usuario.id_usuario` | Usuário que realizou a avaliação. |
| `id_filme` | INT | Sim | FK -> `filmes.id_filme` | Filme avaliado. |
| `nota` | INT | Sim | — | Nota atribuída ao filme, entre 1 e 5. |
| `comentario` | TEXT | Não | — | Comentário escrito pelo usuário. |
| `data_avaliacao` | DATETIME | Sim | — | Data e hora da avaliação. Padrão: horário atual. |

- A combinação de `id_usuario` e `id_filme` possui restrição `UNIQUE`. Assim, um usuário não pode cadastrar mais de uma avaliação para o mesmo filme.
- O campo `nota` possui uma restrição `CHECK` para aceitar somente valores entre 1 e 5.

### 6. contato

Armazena as mensagens enviadas pelos visitantes por meio do formulário de contato do MovieFlix.

| Coluna | Tipo | Obrigatório | Chave | Descrição |

| `id_contato` | INT, AUTO_INCREMENT | Sim | PK | Identificador único da mensagem. |
| `nome` | VARCHAR(100) | Sim | — | Nome de quem enviou a mensagem. |
| `email` | VARCHAR(255) | Sim | — | E-mail para contato. |
| `assunto` | VARCHAR(50) | Sim | — | Assunto da mensagem. |
| `mensagem` | TEXT | Sim | — | Conteúdo da mensagem enviada. |
| `data_envio` | DATETIME | Sim | — | Data e hora do envio. Padrão: horário atual. |

## Restrições e integridade dos dados

O banco de dados utiliza chaves primárias, chaves estrangeiras, índices e restrições para manter a organização e a integridade das informações.

Principais regras implementadas:

- Os identificadores principais das tabelas utilizam `AUTO_INCREMENT`.
- O e-mail da tabela `usuario` não pode se repetir.
- O código da tabela `cupons` não pode se repetir.
- A quantidade de um aluguel deve ser igual ou superior a 1.
- A nota de uma avaliação deve estar entre 1 e 5.
- O valor de desconto de um cupom deve ser maior que zero.
- A data de expiração de um cupom deve ser posterior à data de início.
- O limite de uso de um cupom, quando informado, deve ser maior que zero.
- A quantidade de utilizações de um cupom não pode ser negativa.
- As chaves estrangeiras impedem referências a usuários, filmes e cupons inexistentes.

## Padrão de nomes

O banco de dados segue os seguintes padrões:

- Nomes de tabelas em letras minúsculas e sem espaços: `usuario`, `filmes`, `aluguel`.
- Nomes de colunas em letras minúsculas, utilizando `_` quando necessário: `id_usuario`, `data_aluguel`.
- Chaves primárias identificadas pelo prefixo `id_`.
- Chaves estrangeiras utilizando o identificador da tabela relacionada.
- Nomes sem acentos e sem caracteres especiais.

## Tecnologias utilizadas

| Tecnologia | Utilização |

| MariaDB 10.4.32 | Sistema de gerenciamento do banco de dados. |
| InnoDB | Mecanismo de armazenamento das tabelas. |
| `utf8mb4` | Conjunto de caracteres utilizado para armazenar textos. |
| phpMyAdmin 5.2.1 | Ferramenta utilizada para administrar e importar/exportar o banco. |
| PHP 8.2.12 | Linguagem utilizada na aplicação para comunicação com o banco de dados. |

## Arquivo SQL

O arquivo `database/movieflix.sql` contém a estrutura das seis tabelas, seus índices, chaves primárias, chaves estrangeiras, restrições e alguns registros iniciais de filmes e usuários.

Ele pode ser importado pelo phpMyAdmin para criar e configurar o banco de dados `movieflix`.