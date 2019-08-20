$(document).ready( function(){
    $("#form_submit").click( function(){
        $.ajax({
            url: "php/enviar.php",
            method: "POST",
            data:{
                nome:$("#form_nome").val(),
                email:$("#form_email").val(),
                telefone:$("#form_telefone").val(),
                mensagem:$("#form_mensagem").val(),
            },success: function(data){
                console.log(data);
            }
        });
    });
});