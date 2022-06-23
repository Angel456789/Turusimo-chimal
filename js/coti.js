 $(document).ready(function() {
    $("#codeForm").submit(function(){
        $.ajax({
            url:'qr.php',
            type:'POST',
            data: {formData:$("#content").val(), ecc:$("#ecc").val(), size:$("#size").val()},
            success: function(response) {
                $(".showQRCode").html(response);  
            },
         });
    });
});

llenaCampos()
let llenaCampos = () => {
    let optionOrDes = '<option value="" selected hidden>Selecciona una opción</option>'
    // fetch()
    // .then(resp => resp.json)
    // .then(data =>{
    //     for (let i = 0; i < data.result.length; i++) {
    //         const element = data.result[i];
    //         optionOrDes += `<option value="${element.clave}">${element.nombre}</option>`

    //     }

    //     //innerhtml
    // })
}
