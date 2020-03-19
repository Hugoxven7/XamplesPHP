
<!-- __________________________________________________________________________________
    |                                                                                  |
    |           ELECCIÓN DE ALERT CON MENSAJE DE CONFIRMACIÓ O CANCELACIÓN             |
    |                                                                                  |
    |__________________________________________________________________________________|
 -->
 

<html>
<head>
    <title>Confirmación de envío de formulario</title>
    <meta charset="utf-8">
</head>

<body>

    <p id="resul">Aquí se muestra la opción elegida: </p>

    <form name=tuformulario action="">
        <input type="text" name="cualquiercampo">
        <input type=button onclick="pregunta()" value="Enviar">
    </form>

    <script language="JavaScript">
    function pregunta()
    {
        var mensaje;
        var opcion = confirm("Elección de personalidad");

        if (opcion == true)
        {
            mensaje = "Mr. Malware Aceptar";
        } else {
            mensaje = "Mr. Qwerty Cancelar";
        }
        document.getElementById("resul").innerHTML = mensaje;
    }
    </script>

</body>

</html>