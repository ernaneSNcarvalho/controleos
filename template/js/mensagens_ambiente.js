function RetornarMsg(num) {
    var msg = '';
<<<<<<< HEAD
=======

>>>>>>> 723c827e20876d51f2c28bb6933d87735b7b00ed
    switch (num) {
        case -1:
            msg = 'Ocorreu um erro na operação. Tente mais tarde!';
            break;
<<<<<<< HEAD

        case 0:
            msg = 'Preencher o(s) campo(s) obrigatório(s)';
            break;

=======
        case 0:
            msg = 'Preencher o(s) campo(s) obrigatório(s)!'
            break;
>>>>>>> 723c827e20876d51f2c28bb6933d87735b7b00ed
        case 1:
            msg = 'Ação realizada com sucesso';
            break;
    }

    return msg;
}