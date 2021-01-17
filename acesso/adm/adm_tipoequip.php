<?php

require_once '../../CTRL/TipoCTRL.php';
require_once '../../VO/TipoVO.php';

if (isset($_POST['btn-gravar'])) {
    $ctrl = new TipoCTRL();
    $vo = new TipoVO();
    $nome = $_POST['nomeTipo'];
    $vo->setNomeTipo($nome);
    $ret = $ctrl->InserirTipoCtrl($vo);
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
                            <h1>Tipo de Equipamento</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Modelo de equipamento</a></li>

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
                        <h3 class="card-title">Gerencie aqui todos os tipos de equipamento</h3>
                    </div>
                    <div class="card-body">
                        <form action="adm_tipoequip.php" method="POST">
                            <div class="form-group">
                                <label for="">Nome tipo</label>
                                <input class="form-control" type="text" name="nomeTipo" id="" placeholder="Digite aqui...">
                            </div>

                            <button name="btn-gravar" class="btn btn-success">Gravar</button>
                        </form>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">TIPOS CADASTRADOS</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nome do tipo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>(nome)</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-xs">Alterar</a>
                                                    <a href="#" class="btn btn-danger btn-xs">Excluir</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>

                </div>

        </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include_once '../../template/_footer.php';
    ?>

    </div>

</body>

</html>