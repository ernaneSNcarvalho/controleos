<?php
if (isset($ret)) {
    switch ($ret) {

        case -1:
            echo "<script>
<<<<<<< HEAD
                toastr.error(RetornarMsg(0));
=======
                toastr.error(RetornaMsg(-1));
>>>>>>> 723c827e20876d51f2c28bb6933d87735b7b00ed
            </script>";
            break;

        case 0:
            echo "<script>
                toastr.warning(RetornaMsg(0));
            </script>";
            break;

        case 1:
            echo "<script>
                toastr.success(RetornaMsg(1));
            </script>";
            break;
    }
}
