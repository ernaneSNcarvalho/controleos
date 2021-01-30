function ValidarTela(tela) {
    var ret = true;

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

    return ret;
}