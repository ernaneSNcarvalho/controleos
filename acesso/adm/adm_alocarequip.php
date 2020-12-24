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
                            <h1>Alocar equipamento</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Alocar equipamento</a></li>

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
                        <h3 class="card-title">Aqui você aloca equipamento ao setor específico</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Setor</label>
                            <select class="form-control" name="" id="">
                                <option class="form-control" value="">Selecione</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="">Equipamento</label>
                            <select class="form-control" name="" id="">
                                <option class="form-control" value="">Selecione</option>
                            </select>
                        </div>
                        <button class="btn btn-success">Gravar</button>
                        <hr>
                    </div>
                </div>
        </div>
        </section>
    </div>

    <?php
    include_once '../../template/_footer.php';
    ?>
    </div>

</body>

</html>