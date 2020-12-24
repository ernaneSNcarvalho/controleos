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
                            <h1>Filtre seus chamados</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Meus chamados</a></li>

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
                        <h3 class="card-title">Aqui você visualiza todos chamados realizados</h3>

                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Escolha a situação do chamado</label>
                            <select class="form-control" name="" id="">
                                <option value="">Todos</option>
                                <option value="">Aberto</option>
                                <option value="">Concluido</option>
                            </select>

                        </div>

                        <button class="btn btn-success">Pesquisar</button>
                        <hr>
                        <p>Chamados Encontrados</p>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Data da abertura</th>
                                        <th>Funcionario</th>
                                        <th>Equipamento</th>
                                        <th>Problema</th>
                                        <th>Data atendimento</th>
                                        <th>Tecnico</th>
                                        <th>Data encerramento</th>
                                        <th>Laudo</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>(data abertura)</td>
                                        <td>(funcionario)</td>
                                        <td>(equipamento)</td>
                                        <td>(problema)</td>
                                        <td>(data atendimento)</td>
                                        <td>(tecnico)</td>
                                        <td>(data encerramento)</td>
                                        <td>(laudo)</td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-xs">Ver mais...</a>

                                        </td>
                                        <hr>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

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
        ?>

    </div>
    <!-- ./wrapper -->


</body>

</html>