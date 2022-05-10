<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo - Nova Tarefa</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="#">
                <img src="img/logo.png" width="30" height="30" alt="logo">
                SuperTodo
            </a>
        </div>
    </nav>

    <?php if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1) : ?>
        <div class="pt-2 d-flex justify-content-center confirmacao">
            <h5>
                Tarefa inserida com sucesso!
            </h5>
        </div>
    <?php endif; ?>

    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul>
                    <li class="list-group-item"><a href="index.php">Tarefas Pendentes</a></li>
                    <li class="list-group-item active"><a href="nova_tarefa.php">Nova Tarefa</a></li>
                    <li class="list-group-item"><a href="todas_tarefas.php">Todas Tarefas</a></li>
                </ul>
            </div>

            <div class="col-md-9">
                <div class="container pagina">
                    <div class="row">
                        <div class="col">
                            <h4>Nova Tarefa:</h4>
                            <hr/>
                            <form action="tarefa_controller.php?acao=inserir" method="post">
                                <div class="form-group">
                                    <label>Tarefa:</label>
                                    <input class="form-control" type="text" name="tarefa" placeholder="Exemplo: Comprar pão" required>
                                </div>
                                <button class="btn btn-outline-success">Adicionar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>