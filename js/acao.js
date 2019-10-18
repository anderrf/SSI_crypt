

$(document).on("click", "#btnLinkLogin", function(){
    $(location).attr("href", "login.html");
});

$(document).on("click", "#btnLinkCadastro", function(){
    $(location).attr("href", "cadastro.html");
});

$(document).on("click", "#btnVoltar", function(){
    $(location).attr("href", "index.html");
});


$(document).on("click", "#btnCadastrar", function(){
    if(($("#cadNome").val() != "") && ($("#cadSenha").val() != ""))
    {

    }
    else
    {
        alert("Preencher todos os campos!");
    }
});