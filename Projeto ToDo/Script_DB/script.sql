-- TABELA DE STATUS:
CREATE TABLE tb_status (
	id int PRIMARY KEY AUTO_INCREMENT,
    status VARCHAR(15) NOT NULL
);

-- INSERÇÃO DOS DOIS STATUS QUE TEMOS NA APLICAÇÃO:
INSERT INTO tb_status(status) VALUES('pendente');
INSERT INTO tb_status(status) VALUES('realizado');

-- TABELA DE TAREFAS:
CREATE TABLE tb_tarefas(
    id INT PRIMARY KEY AUTO_INCREMENT,
    tarefa TEXT NOT NULL,
    id_status INT NOT NULL DEFAULT 1,
    data_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
 	FOREIGN KEY(id_status) REFERENCES tb_status(id)
);

-- APENAS PARA TESTAR.. INSERÇÃO NA TALEBA DE TAREFAS: 
INSERT INTO tb_tarefas(tarefa) VALUES('Lavar a louça');
INSERT INTO tb_tarefas(tarefa) VALUES('Levar o lixo');
INSERT INTO tb_tarefas(tarefa) VALUES('Fazer um bolo');