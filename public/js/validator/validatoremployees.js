var $registrationForm = $("#demo-form");
if ($registrationForm.length) {
  $registrationForm.validate({
    rules: {
      dni: {
        required: true,
        number: true,
      },
      departamento: "required",
      nombre: "required",
      provincia: "required",
      paterno: "required",
      distrito: "required",
      materno: "required",
      direccion: "required",
      fecha: "required",
    },
    messages: {
      dni: {
        required: "Please enter dni!",
      },
      departamento: {
        required: "Please enter departamento!",
      },
      nombre: {
        required: "Please enter nombre!",
      },
      provincia: {
        required: "Please enter provincia!",
      },
      distrito: {
        required: "Please enter distrito!",
      },
      materno: {
        required: "Please enter materno!",
      },
      direccion: {
        required: "Please enter direccion!",
      },
      fecha: {
        required: "Please enter fecha!",
      },
    },
  });
}
