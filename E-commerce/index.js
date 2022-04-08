$(document).ready(function(){
    var funcion;
    verificar_sesion();

    function verificar_sesion(){
        funcion= "verificar_sesion";
        $.post("controllers/usuarioController.php",{funcion},(response)=>{
            
            if (response != '') {
                let sesion= JSON.parse(response);
                $("#nav-login").hide();
                $("#nav-register").hide();
                $("#usuario-nav").text(sesion.user);
                $("#avatar_nav").attr("src","util/img/"+sesion.avatar);
                $("#avatar-menu").attr("src","util/img/"+sesion.avatar);
                $("#usuario-menu").text(sesion.user);;

            }else{
                $("#nav-usuario").hide();
            }
        })
    }
    
  
})