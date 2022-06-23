const nombre = document.getElementById("user");
const contra = document.getElementById("password");
const form = document.getElementById("form");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    let condicion = validacionForm();
    if (condicion) {
      enviarFormulario(e.target);
    }
  });

  function validacionForm() {
    let condicion = true;
    if (nombre.value.length < 4 || nombre.value.trim() == "") {
        mostrarMensajeError("usuario", "Este campo no puede estar vacio");
        condicion = false;
    }
    if (contra.value.length < 4 || contra.value.trim() == "") {
        mostrarMensajeError("contrados", "Este campo no puede estar vacio");
        condicion = false;
      }
        return condicion;
}

function mostrarMensajeError(claseInput, mensaje) {
    let elemento = document.querySelector(`#${claseInput}`);
    elemento.innerHTML = mensaje;
  }

  function enviarFormulario(form) {
    let param = new FormData(form);
    fetch('consultar.php',{
      method: 'POST',
      body: param
    }).then(response => response.json())
    .then(data => {
      if(data.code == "1"){
          location.assign("index1.html");
      }else{
        alert(data.mensaje);
      }
    })
  }