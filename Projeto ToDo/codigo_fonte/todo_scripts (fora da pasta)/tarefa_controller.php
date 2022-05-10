<?php

    require "../../todo_scripts/tarefa_model.php";
    require "../../todo_scripts/tarefa_service.php";
    require "../../todo_scripts/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'inserir') {
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conn = new Conexao();

        $tarefaService = new TarefaService($conn, $tarefa);
        $tarefaService->inserir();

        header('Location: nova_tarefa.php?inclusao=1');
    }

?>