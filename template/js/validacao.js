function ValidarTela(tela) {
    var ret = true;

<<<<<<< HEAD
    switch (tela) {
        case 1: // tela de setor

            if ($("nome").val().trim() == '') {
                toastr.warning(RetornarMsg(0));
                ret = false;
            }

            break;

        case 2: // tela do alocar
            break;
    }


=======

    switch (tela) {
        case 1: // tela setor
            if ($("#nome").val().trim() == '') {
                toastr.warning(RetornarMsg(0));
                ret = false;
            }
            break;
        case 2: // tela modelo
            break;
        case 3:
            break;
    }

>>>>>>> 723c827e20876d51f2c28bb6933d87735b7b00ed
    return ret;
}