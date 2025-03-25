O usuário deseja desenvolver um backend para uma aplicação financeira usando PHP. A aplicação deve permitir que os usuários: 

Criem relatórios financeiros 

Estabeleçam metas financeiras 

Categorizem transações 

Como não existem arquivos existentes no diretório atual, será necessário criar uma nova estrutura de projeto do zero. Isso envolverá a definição dos componentes necessários, como conexões de banco de dados, modelos para transações e relatórios, e controladores para gerenciar as solicitações do usuário. 


Plano: 

Estrutura do Projeto: 

Criar um novo diretório para o projeto (por exemplo, financial_app). 

Dentro deste diretório, criar as seguintes subpastas: 

src/ - para o código-fonte 

public/ - para arquivos públicos (por exemplo, index.php) 

config/ - para arquivos de configuração (por exemplo, conexão com o banco de dados) 

models/ - para modelos de dados (por exemplo, Transaction.php, Report.php) 

controllers/ - para gerenciar solicitações (por exemplo, TransactionController.php, ReportController.php) 

views/ - para quaisquer arquivos de visualização, se necessário (por exemplo, templates HTML) 

Funcionalidades Principais: 

Conexão com o Banco de Dados: Criar um arquivo Database.php no diretório config/ para gerenciar conexões com o banco de dados. 

Modelos: 

Transaction.php: Definir propriedades e métodos para transações (por exemplo, valor, categoria, data). 

Report.php: Definir propriedades e métodos para gerar relatórios com base nas transações. 

Controladores: 

TransactionController.php: Gerenciar solicitações relacionadas a transações (por exemplo, criar, ler, atualizar, excluir). 

ReportController.php: Gerenciar solicitações relacionadas a relatórios (por exemplo, gerar relatório, definir metas). 

Roteamento: Configurar o roteamento em index.php para direcionar solicitações aos controladores apropriados. 

Dependências: 

Considerar o uso do Composer para gerenciamento de dependências (por exemplo, para bibliotecas necessárias). 

Se usar um banco de dados, decidir sobre um sistema de banco de dados (por exemplo, MySQL) e garantir que as extensões PHP necessárias estejam instaladas. 

 

Resumo das Etapas Concluídas: 

Estrutura do Projeto: 

Criado o diretório financial_app com as subpastas src, public, config, models, controllers e views. 

Código Inicial: 

Conexão com o Banco de Dados: Criado o arquivo config/Database.php para gerenciar a conexão com o banco de dados. 

Modelos: 

Criado o modelo models/Transaction.php para gerenciar transações. 

Criado o modelo models/Report.php para gerenciar relatórios. 

Controladores: 

Criado o controlador controllers/TransactionController.php para gerenciar transações. 

Criado o controlador controllers/ReportController.php para gerenciar relatórios. 

Roteamento: Criado o arquivo public/index.php para gerenciar as requisições e direcionar para os controladores apropriados. 
