# Desafio All Blacks, Solução
A solução por mim proposta tem o objetivo de facilitar a vida da secretária o máximo possível.
Não me atentei a alguns detalhes mais técnicos visando à simplicidade da solução proposta.
Deixo disponível o link para a demonstração da solução.
http://appsolution.tk/
Descrição
O objetivo é automatizar o processo ao máximo, por isso decidi não usar o Excel como aplicação principal.
html, css, javascript, php e MySQL  farão o trabalho pesado.
Antes de usar a solução será preciso realizar algumas tarefas simples;
I-	Salvar a planilha excel como “Planilha XML”.
II-	Acessar a aplicação pelo link, ou caso esteja em local host, acessar o endereço da aplicação em seu computador pelo IP. Supondo que o arquivo da aplicação já esteja no servidor, ao acessar pela primeira vez, será criada automaticamente o banco de dados e suas tabelas. OBS, em minha solução, como estou usando servidor online o mesmo não me permitiu criar base de dados com PHP, por essa razão apenas as tabelas serão criadas dinamicamente.
III-	Será pedido para importar a tabela excel salva como clientes.xml.
IV-	Após a importação aparecerá uma mensagem “Concluído”, clique em inicio e a aplicação estará pronta para uso.
Funcionamento 
Veja as funcionalidades da solução
Importe o arquivo clientes.xml
Quando o xml enviado pelo site chegar apenas importe o mesmo pela opção importar xml e o mesmo já será lançado na base de dados.
Inserir individual
Essa função tem como objetivo inserir clientes que não vieram pelo xml.
Dados pendentes
Listara todos os clientes com dados pendestes para atualizar.
E-mail
Por aqui poderemos enviar e-mails em massa para todos os contatos em apenas um click.
SQL para criação das tabelas, obs “como o servidor online não me permitiu criar base de dados com php,  a base de dados e o usuário foram criados pelo Cpanel”.
CREATE TABLE IF NOT EXISTS TORCEDOR (
                ID int(11) AUTO_INCREMENT PRIMARY KEY,
                NOME VARCHAR (50),
                DOCUMENTO BIGINT NOT NULL,
                CEP INT,
                ENDERECO VARCHAR (50),
                BAIRRO VARCHAR (50),
                CIDADE VARCHAR (30),
                UF CHAR (2),
                TELEFONE INT(11),
                EMAIL VARCHAR (40),
                ATIVO VARCHAR(4)




