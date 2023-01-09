$('[id*="inputCadastro"]').each(function (index) {
    $('#' + this.id).focus(function () {
        $('#' + this.id).parent().css('border', '1px solid var(--cor-background-terceario)');
    });
    $('#' + this.id).focusout(function () {
        $('#' + this.id).parent().css('border', 'none');
    });
});