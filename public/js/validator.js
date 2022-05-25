jQuery.validator.addMethod(
  "isValidColor",
  function (value, element) {
    var col = /(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i;
    return (
      this.optional(element) ||
      (col.test(value))
    );
  },
  "Ingrese color en hexadecimal"
);

var $registrationForm = $("#demo-form");
if ($registrationForm.length) {
  $registrationForm.validate({
    rules: {
      name: "required",
      color: {
        required: true,
        isValidColor: true,
      },
    },
    messages: {
      name: {
        required: "Please enter name!",
      },
      color: {
        required: "Please enter color!",
        isValidColor: "Please enter hexacolor!",
      },
    },
  });
}
