
<!-- __________________________________________________________________________________
    |                                                                                  |
    |           AVTICACIÓN DE SUBMITN MEDITANTE FORM Y VERIFICACIÓN CON PHP            |
    |                                                                                  |
    |__________________________________________________________________________________|
 -->

<?php 
    if(isset($_POST['nombre_del_boton']) && $_POST['nombre_del_boton'] == 'Submit #1')
    {
        echo '<script> alert("Hola Kernel -- Submit #1"); </script>';
    }
?>

<?php 
if(isset ($_POST['bttsubmit']))
{
    echo '<script> alert("Hola Kernel -- Submit #2"); </script>';
}
?>

<form name="form1" method="post" action="" id="primary">
    <input type="submit" name="nombre_del_boton" id="nombre_del_boton" value="Submit #1">
</form>

<form name="form1" method="post" action="">
    <input type="submit" name="bttsubmit" id="nombre_del_boton" value="Submit #2">
</form>

<form action="/index.php" method="post" id="login-form">
    <button type="submit" tabindex="0" name="bttsmt">Identificarse</button>
</form>

<form id="paul">
  <input type="button" onclick="alert(document.forms[0].id);" value="Rrtortnar ID" />
</form>
