$(function () {

    $("#cpForm").on("submit", function (e) {

        var postalCode = $("#codigoPostal").val();
        window.location.replace("http://" + document.location.hostname + '/calculadora-provincia/' + postalCode);
        e.preventDefault();
    });
});
var inputNumber = document.getElementById('codigoPostal');
inputNumber.setAttribute("onkeypress", "return isNumberKey(event)");
//Comprueba la tecla pulsada y solo permite introducir números en el campo
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31
        && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
