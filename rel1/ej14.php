<html>

<head>Ej14<title></title></head>
<body>
    <h1>Ejercicio 14</h1>
    <form method="post">
        <br />
        Introduzca nombre:
        <br />
        <input name="nombre" type="text" size="8"/>
        <br/>
        Introduzca edad:
        <br />
        <input name="edad" type="text" size="8">
        <br/>
        Introduzca curso:
        <br />
        <input name="curso" type="text" size="8">
        <br />
        <input type="submit" value= "enviar">
    <form>
    <?php 
    if($_POST){
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $curso = $_POST["curso"];
        echo "<br />";
        print "El alumno $nombre con $edad años de $curso º le falta la ESO"; //$_POST["nombre"] con $_POST["edad"] años de $_POST["curso"] º le falta la ESO";
        }
    
    ?>
</body>
</html>