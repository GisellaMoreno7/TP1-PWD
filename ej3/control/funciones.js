const botonEnviar = document.querySelector('#submit');
botonEnviar.addEventListener('click', (e) => {
    e.preventDefault();
});

$("#form3").validate({
    rules: {
        nombre: {
            required: true,
            minlength: 3,
            maxlength: 15
        },
        apellido: {
            required: true,
            minlength: 3,
            maxlength: 20
        },
        edad: {
            required: true,
            minlength: 1,
            maxlength: 3,
            number: true
        },
        direccion: {
            required: true
        },
    },
    messages: {
        nombre: {
            required: "Ingrese un nombre válido",
            minlength: "Mínimo 3 caracteres",
            maxlength: "Máximo 15 caracteres"
        },
        apellido: {
            required: "Ingrese un apellido válido",
            minlength: "Mínimo 3 caracteres",
            maxlength: "Máximo 20 caracteres"
        },
        edad: {
            required: "Ingrese una edad válida",
            minlength: "Mínimo 1 número",
            maxlength: "Máximo 3 números",
            number: "Campo numérico"
        },
        direccion: {
            required: "Ingrese una dirección"
        },
    }
});

$("#submit").click(function () {
    if ($("#form3").valid() == false) {
        return;
    }
    let nombre = $("#nombre").val();
    let apellido = $("#apellido").val();
    let edad = $("#edad").val();
    let direccion = $("#direccion").val();
})