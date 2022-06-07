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
    } else if($acao == 'marcarRealizada') {
        $tarefa->__set('id', $_GET['id'])->__set('id_status', 2);
        $tarefaService->marcarRealizada();
        if(isset($_GET['pagina']) && $_GET['pagina'] == 'index') {
            header('Location: index.php');
        } else {
            header('Location: todas_tarefas.php');
        }
    } else if($acao == 'removerTarefa') {
        $tarefa->__set('id', $_GET['id']);
        $tarefaService->removerTarefa(); 
        if(isset($_GET['pagina']) && $_GET['pagina'] == 'index') {
            header('Location: index.php');
        } else {
            header('Location: todas_tarefas.php');
        }
    } else if($acao == 'atualizarTarefa') {
        $tarefa->__set('id', $_POST['id'])->__set('tarefa', $_POST['tarefa']);
        $tarefaService->atualizaTarefa();
        if(isset($_GET['pagina']) && $_GET['pagina'] == 'index') {
            header('Location: index.php');
        } else {
            header('Location: todas_tarefas.php');
        }
    }

?>