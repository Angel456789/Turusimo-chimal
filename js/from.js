const nombre = document.getElementById("myname");
const apellidos = document.getElementById("surname");
const correo = document.getElementById("email");
const celular = document.getElementById("mobile");
const contrasenia = document.getElementById("pass1");
const contrasenia2 = document.getElementById("pass2");
const form = document.getElementById("form");
const listInputs = document.querySelectorAll(".form-input");
const usu = document.getElementById("user");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  let condicion = validacionForm();
  if (condicion) {
    enviarFormulario(e.target);
  }
});

function validacionForm() {
  form.lastElementChild.innerHTML = "";
  let condicion = true;
  listInputs.forEach((element) => {
    element.lastElementChild.innerHTML = "";
  });

  if (nombre.value.length < 5 || nombre.value.trim() == "") {
    mostrarMensajeError("nom", "Nombre no valido* Nota:Minimo 5 caracteres");
    condicion = false;
  }
  if (apellidos.value.length < 5 || apellidos.value.trim() == "") {
    mostrarMensajeError("ape", "Apellido no valido* Nota:Minimo 5 caracteres");
    condicion = false;
  }
  if (correo.value.length < 10 || correo.value.trim() == "") {
    mostrarMensajeError("cor", "Correo no valido*");
    condicion = false;
  }
  if (
    celular.value.length != 10 ||
    celular.value.trim() == "" ||
    isNaN(celular.value)
  ) {
    mostrarMensajeError("mobi", "Numero no valido*");
    condicion = false;
  }
  if (usu.value.length < 5 || usu.value.trim() == "") {
    mostrarMensajeError("usuario", "Usuario no valido* Nota:Minimo 5 caracteres");
    condicion = false;
  }
  if (contrasenia.value.length < 4 || contrasenia.value.trim() == "") {
    mostrarMensajeError("pass", "Contraseña no valido* Nota:Minimo 4 caracteres");
    condicion = false;
  }
  if (contrasenia2.value != contrasenia.value) {
    mostrarMensajeError("passdos", "La contraseña no es la misma*");
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
  fetch('registro.php',{
    method: 'POST',
    body: param
  }).then(response => response.text())
  .then(data => {
    alert(data);
  })
}