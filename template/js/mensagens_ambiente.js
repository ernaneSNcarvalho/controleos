function RetornarMsg(num) {
    var msg = '';

    switch (num) {
        case -1:
            msg = 'Ocorreu um erro na operação. Tente mais tarde!';
            break;
        case 0:
            msg = 'Preencher o(s) campo(s) obrigatório(s)!'
            break;
        case 1:
            msg = 'Ação realizada com sucesso';
            break;
    }

    return msg;
}