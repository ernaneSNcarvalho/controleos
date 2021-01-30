<?php

require_once '../../CTRL/UsuarioCTRL.php';
require_once '../../VO/UsuarioVO.php';
require_once '../../VO/TecnicoVO.php';
require_once '../../VO/FuncionarioVO.php';

if (isset($_POST['btn-gravar'])) {
    $ctrl = new UsuarioCTRL();
    $tipo = $_POST['tipo'];

    switch ($tipo) {

        case '1':
            $vo = new UsuarioVO();
            $vo->setTipo($tipo);
            $vo->setNome($_POST['nome']);
            $vo->setCpf($_POST['cpf']);
            $ret = $ctrl->InserirUserAdm($vo);
            break;

        case '2':
            $vo = new FuncionarioVO();
            $vo->setTipo($tipo);
            $vo->setNome($_POST['nome']);
            $vo->setCpf($_POST['cpf']);
            $vo->setEnderecoFun($_POST['endereco']);
            $vo->setTelFun($_POST['telefone']);
            $vo->setEmailFun($_POST['email']);
            $vo->setIdSetor($_POST['setor']);
            $ret = $ctrl->InserirUserFunc($vo);
            break;

        case '3':
            $vo = new TecnicoVO();
            $vo->setTipo($tipo);
            $vo->setNome($_POST['nome']);
            $vo->setCpf($_POST['cpf']);
            $vo->setEnderecoTec($_POST['endereco']);
            $vo->setTelTec($_POST['telefone']);
            $vo->setEmailTec($_POST['email']);
            $ret = $ctrl->InserirUserTec($vo);
            break;
    }
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
                            <h1>Novo usuário</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Usuário</a></li>

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
                        <h3 class="card-title">Aqui você insere um novo usuário</h3>
                    </div>
                    <div class="card-body">
                        <form action="adm_usuario.php" method="POST">
                            <div class="form-group">
                                <label for="">Tipo</label>
                                <select class="form-control" name="tipo" id="tipo">
                                    <option value="" selected>Selecione</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Funcionário</option>
                                    <option value="3">Técnico</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite aqui...">
                            </div>
                            <div class="form-group">
                                <label for="">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite aqui...">
                            </div>
                            <div class="form-group">
                                <label for="">Setor</label>
                                <select class="form-control" name="setor" id="setor">
                                    <option value="" selected>Selecione</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Digite aqui...">
                            </div>
                            <div class="form-group">
                                <label for="">Telefone</label>
                                <input type="number" name="telefone" id="telefone" class="form-control" placeholder="(XX)XXXXX-XXXX">
                            </div>
                            <div class="form-group">
                                <label for="">Endereço</label>
                                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Digite aqui...">
                            </div>
                            <button name="btn-gravar" class="btn btn-success">Gravar</button>
                        </form>
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
    include_once '../../template/_msg.php';
    ?>

    </div>
    <!-- ./wrapper -->


</body>

</html>