<?php

    require "../../todo_scripts/tarefa_model.php";
    require "../../todo_scripts/tarefa_service.php";
    require "../../todo_scripts/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    $conn = new Conexao();
    $tarefa = new Tarefa();

    if($acao == 'inserir') {
        $tarefa->__set('tarefa', $_POST['tarefa']);
        $tarefaService = new TarefaService($conn, $tarefa);
        $tarefaService->inserir();
        header('Location: nova_tarefa.php?inclusao=1');
    } else if($acao == 'recuperar') {
        $tarefa_service = new TarefaService($conn, $tarefa);
        $tarefas = $tarefa_service->recuperar();
    }

?>