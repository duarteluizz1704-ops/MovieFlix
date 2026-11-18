## Requisitos funcionais (RF) — o que o sistema faz.

1. O sistema permitir que novos usuários se cadastrem informando: nome, email, telefone, data de nascimento e senha.

2. O sistema permite que usuários já cadastrados realizem o login usando email e senha.

3. O sistema permite que os usuários possam consultar o catálogo de filmes, visualizar informações da obra como: título, gênero, ano de lançamento, classificação indicativa e preço.

4. O sistema permite que os clientes realizem aluguéis dos filmes disponíveis no catálogo.

5. O sistema permite que os clientes possam fazer avaliações das obras, com notas de 1 a 5 estrelas e também fazer comentários.

6. O sistema permite a visualização de um painel administratrivo para o administrador acompanhar o desempenho do site em relação aos clientes, filmes, aluguéis, avaliações e estatísticas do catálogo.

7. O sistema permite você entrar em contato com o desenvolvedor para tirar suas dúvidas, fazer críticas ou elogios, ou relatar problemas.

8. O sistema permite a visualização do perfil do cliente para registro de suas atividades no site e caracterização da conta.


## Requisitos não funcionais (RNF) — qualidades do sistema.

1. O sistema armazena as senhas dos usuários de forma criptografada usando funções hash.

2. O sistema apresenta uma interface organizada, intuitiva e simples.

3. O sistema deve utilizar banco de dados MySQL 8 e PHP 8


## Regras de negócio (RN) — as "leis" do mundo real que o sistema precisa respeitar.

1. Todo usuário cadastrado deve possuir um tipo de conta: administrador (admin) ou cliente (cliente). Novos cadastros devem receber automaticamente o tipo cliente.

2. Somente usuários autenticados com o tipo administrador podem acessar o Dashboard e as funcionalidades administrativas.

3. Um cliente só pode alugar filmes que estejam disponíveis no catálogo e realizar uma avaliação por filme. A nota da avaliação deve estar entre 1 e 5 estrelas.

4. Cada aluguel possui um prazo determinado antes da compra, ao fim deste período o filmes deixa de estar disponível para o cliente assistir.


## Histórias de usuário.

1. Cadastro de usuários(visitante): Quero criar uma conta no MovieFlix para ter acesso ao catálogo e realizar aluguéis e fazer avaliações.

Critérios de Aceitação:
- O sistema solicita nome, e-mail, telefone, data de nascimento, senha e confirmação de senha.
- O preenchimento de todos os campos é obrigatório.
- O sistema impede o cadastro de um email que já esteja registrado.
- As senhas devem ser iguais para a conclusão do cadastro.
- Após o cadastro bem sucedido. o usuário será direcionado para a página de login.
- A conta criada deve receber o tipo 'cliente' automaticamente.


2. Aluguel de filmes(cliente): Quero consultar o catálogo para alugar filmes disponíveis e aproveitar os conteúdos do MovieFlix.

Critérios de Aceitação:
- O sistema apresentará os filmes disponíveis com suas informações e preços.
- O cliente poderá selecionar um filme para alugar.
- O sistema irá registrar o usuário, o filme, a quantidade e a data do aluguel.
- O sistema não permitirá o aluguel de filmes indisponíveis.
- O aluguel realizado deve aparecer na área de aluguéis do cliente.


3. Gerenciamento(administrador): Quero acessar um Dashboard com informações sobre clientes, filmes, aluguéis e avaliações. Desejo acompanhar o funcionamento e desempenho do MovieFlix.

Critérios de Aceitação:
- O sistema apenas permitirá o acesso ao Dashboard somente para contas do tipo admin.
- O painel irá apresentar a quantidade de filmes disponíveis, aluguéis realizados, avaliações e faturamento.
- O administrador deve conseguir visualizar os aluguéis realizados e seus respectivos status.
- O painel deve apresentar os filmes mais alugados e as categorias mais procuradas.
- Clientes não devem conseguir acessar as funcionalidades administrativas.