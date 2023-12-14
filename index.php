<!DOCTYPE html>
<html>

<head>
    <title>TABLA DE ASCII</title>
</head>

<body>

<h2>TABLA DE ASCII</h2>

<form>
    <label for="number">PORFAVOR EN EL SIGUIENTE RECUADRO INGRESE UN NUMERO DEL 1 AL 10:</label>
    <input type="number" id="number" min="1" max="10" required>
    <input type="button" value="Mostrar" onclick="showAsciiCharacter()">
</form>

<p id="result"></p>

<script>
    function showAsciiCharacter() {
        var inputNumber = document.getElementById("number").value;
        var decimalValue = parseInt(inputNumber) + 31; // Ajustar el rango a partir del espacio (32)

        if (decimalValue >= 32 && decimalValue <= 126) {
            var asciiCharacter = String.fromCharCode(decimalValue);
            document.getElementById("result").innerHTML = "El caracter ASCII que se muestra es el siguiente: " + asciiCharacter;
        } else {
            document.getElementById("result").innerHTML = "Debes ingresar un numero del 1 al 10 para funcionar";
        }
    }
</script>

</body>

</html>