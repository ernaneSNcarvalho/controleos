<?php
if (isset($ret)) {
    switch ($ret) {

        case -1:
            echo "<script>
                toastr.error(RetornarMsg(0));
            </script>";
            break;

        case 0:
            echo "<script>
                toastr.warning('Preencher o(s) campo(s) obrigatório(s)!');
            </script>";
            break;

        case 1:
            echo "<script>
                toastr.success('Ação realizada com sucesso');
            </script>";
            break;
    }
}
