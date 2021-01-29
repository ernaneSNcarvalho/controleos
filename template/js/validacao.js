function ValidarTela(tela) {
    var ret = true;

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


    return ret;
}