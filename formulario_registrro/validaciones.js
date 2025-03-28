document.getElementById("registroForm").addEventListener("submit", (event) => {
  console.log("aqui estoy");
  //capturar el envio del formulario
  event.preventDefault();

  //Camturar los elelmentos del DOM
  //trim elimina espacios inecesarios

  const nombre = cleanInput(document.querySelector("#nombre").value.trim());
  const email = cleanInput(document.querySelector("#email").value.trim());
  const password = cleanInput(
    document.querySelector("#contrasena").value.trim()
  );
  const repetir_password = cleanInput(
    document.querySelector("#repetir_contrasena").value.trim()
  );

  //validar que los campos no vengan vacíos
  if (!nombre || !email || !password || !repetir_password) {
    alert("Todos los campos son obligatorios");
    return;
  }

  //validar que las contraseñas coincidan
  if (password !== repetir_password) {
    alert("Las contraseñas no coinciden");
    console.log("las contraselas no coinciden");
    return;
  }

  console.log("Formunario validado  - Enviando datos...");

  document.querySelector("#registroForm").submit();
});

//@param {strig} input: entrada del formulario
//@return cadena libre de espacio, comillas simples y arrobas

function cleanInput(input) {
  return input.replace(/['@\s]/g, "");
}
