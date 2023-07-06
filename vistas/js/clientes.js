$(".btnCargarDatos").click(function(){
    var idCliente =$(this).attr("idClientes")
    var datos = new FormData();
    datos.append("idClientes", idClientes);
    datos.append("edit", edit);

    $.ajax({
        url:"ajax/ajaxClientes.php", 
        method:"POST",
        data:datos,
        cache:false,
        contentTye:false,
        processData: false,
        datType: "json",
        succes: function(respuesta){
            console.log("Datos json",respuesta)
        }


    });
})