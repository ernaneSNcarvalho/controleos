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
                            <h1>Realize a abertura de chamado aqui</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Abrir chamado</a></li>

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
                        <h3 class="card-title">Escreva de forma clara o problema do equipamento</h3>

                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Escolha o equipamento</label>
                            <select class="form-control" name="" id="">
                                <option value="">Selecione</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="">Escreva o problema apresentado</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Digite aqui..."></textarea>

                        </div>

                        <button class="btn btn-success">Gravar</button>

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