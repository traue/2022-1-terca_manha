<?php

//CRUD - Create, Read, Update, Delete...

class TarefaService {
    private $conexao;
    private $tarefa;

    //construtor:
    public function __construct(Conexao $conexao, Tarefa $tarefa) {
        $this->conexao = $conexao->conectar();
        $this->tarefa = $tarefa;
    }

    //método de inserção de tarefa:
    public function inserir() {
        $query = 'INSERT INTO tb_tarefas(tarefa) VALUES(:tarefa)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
        $stmt->execute();
    }

    //método que lsita todas as tarefas:
    public function recuperar() {
        $query = '
               SELECT t.id, t.tarefa, t.data_cadastro, s.status
                    FROM tb_tarefas as t
               LEFT JOIN tb_status as s on (t.id_status = s.id)';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //método que lista apenas as tarefas pendentes:
    public function recuperarTarefasPendentes() {
        $query = '
               SELECT t.id, t.tarefa, t.data_cadastro, s.status
                    FROM tb_tarefas as t
               LEFT JOIN tb_status as s on (t.id_status = s.id)
               WHERE t.id_status = :id_status';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}

?>