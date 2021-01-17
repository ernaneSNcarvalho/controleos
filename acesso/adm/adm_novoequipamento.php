<?php

require_once '../../CTRL/EquipamentoCTRL.php';
require_once '../../VO/EquipamentoVO.php';

if (isset($_POST['btn_salvar'])) {
    $vo = new EquipamentoVO();
    $ctrl = new EquipamentoCTRL();
    $tipo = $_POST['tipo'];
    $modelo = $_POST['modelo'];
    $identificacao = $_POST['identificacao'];
    $descricao = $_POST['descricao'];
}

?>

<!DOCTYPE html>
<html>

<head>
    <?php
    include_once '../../template/_head.php';
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <?php
        include_once '../../template/_topo.php';
        include_once '../../template/_menu.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Novo Equipamento</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Equipamento</a></li>

                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cadastre seu novo equipamento aqui</h3>

                    </div>
                    <form action="adm_novoequipamento.php" method="POST">
                        <div class="card-body">
                            <form action="adm_novoequipamento.php" method="POST">
                                <div class="form-group">
                                    <label for="">Tipo</label>
                                    <select class="form-control" name="tipo" id="">
                                        <option value="">Selecione</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="">Modelo</label>
                                    <select class="form-control" name="modelo" id="modelo">
                                        <option value="">Selecione</option>

                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="">Identificação</label>
                                    <input type="text" name="identificacao" id="" class="form-control" placeholder="Digite aqui...">

                                </div>
                                <div class="form-group">
                                    <label for="">Descrição</label>
                                    <textarea name="descricao" class="form-control" placeholder="Digite aqui..."></textarea>

                                </div>

                                <button name="btn-gravar" class="btn btn-success">Gravar</button>
                            </form>
                    </form>
                </div>
                <!-- /.card-body -->

        </div>
        <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include_once '../../template/_footer.php';
    include_once '../../template/_msg.php';
    ?>

    </div>
    <!-- ./wrapper -->


</body>

</html>