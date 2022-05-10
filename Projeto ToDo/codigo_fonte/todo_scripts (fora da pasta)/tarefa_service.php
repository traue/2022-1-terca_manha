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

    public function inserir() {
        $query = 'INSERT INTO tb_tarefas(tarefa) VALUES(:tarefa)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
        $stmt->execute();
    }

}

?>