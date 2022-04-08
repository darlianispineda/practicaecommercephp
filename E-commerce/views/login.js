$(document).ready(function(){
    var funcion;
    verificar_sesion();

    function verificar_sesion(){
        funcion= "verificar_sesion";
        $.post("../controllers/usuarioController.php",{funcion},(response)=>{
            if (response != '') {
                location.href="../index.php"
            }
        })
    }
    
    $('#form-login').submit(e=>{
        funcion='login';
        let user=$("#user").val();
        let pass=$("#pass").val();
        
        

        $.post("../controllers/usuarioController.php",{user,pass,funcion},(response)=>{
            if (response=="logeado") {
                toastr.success("*Logeado correctamente!");
                location.href="../index.php"
            }else {
                toastr.error("*Usuario y/o contraseña incorrecta");
            }
        });

        e.preventDefault();
    })





})