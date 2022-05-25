$(document).ready(function(){ 
    $("#btn1").click(function(){
        //tipos de mensajes succes, info, warning, error
        //titulo y mensaje de texto
        toastr["success"]("Registrado correctamente!");   
        
    
    });
    
    toastr.options = { 
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "tapToDismiss": false
    };
    
    
    
    
    
});	    