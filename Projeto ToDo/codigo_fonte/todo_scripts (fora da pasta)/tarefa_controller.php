<?php

    require "../../todo_scripts/tarefa_model.php";
    require "../../todo_scripts/tarefa_service.php";
    require "../../todo_scripts/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    $conn = new Conexao();
    $tarefa = new Tarefa();
    $tarefaService = new TarefaService($conn, $tarefa);

    if($acao == 'inserir') {
        $tarefa->__set('tarefa', $_POST['tarefa']);
        $tarefaService->inserir();
        header('Location: nova_tarefa.php?inclusao=1');
    } else if($acao == 'recuperar') {
        $tarefas = $tarefaService->recuperar();
    } else if($acao == 'recuperarPendentes') {
        $tarefa->__set('id_status', 1);
        $tarefas = $tarefaService->recuperarTarefasPendentes();
    }

?>