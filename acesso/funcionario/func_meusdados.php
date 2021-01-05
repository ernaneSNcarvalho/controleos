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
                            <h1>Atualiza suas informações</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Meus dados</a></li>

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
                        <h3 class="card-title">Mantenha seus dados atualizados aqui</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Digite aqui...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">E-mail</label>
                                    <input type="email" name="" id="" class="form-control" placeholder="nome@dominio.com">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Telefone</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="(XX)XXXXX-XXXX">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Endereço</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Digite aqui...">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success">Gravar</button>
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