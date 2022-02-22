<html>

<head>Ej12<title></title></head>
<body>
    <h1>Ejercicio 12</h1>
    <form method="post">
       ¿Cree usted que manu es alcoholico?
        <br />
        <input name="seleccion" type="radio" value = "yes" checked="checked" />Si
        <br />
        <input name="seleccion" type ="radio" value="no" />No
        <br />
        <input type="submit" value= "enviar">
        <form>
    <?php 
    if($_POST){
        $enlace = mysqli_connect("127.0.0.1","cursophp","", "lindavista");
        $consulta = mysqli_query($enlace, "select * from votos");
        if($_POST["yes"]) {
            $result = $consulta["votos1"] + 1;
            $consulta = mysqli_query($enlace, "update votos set votos1 = $result + 1);
        }



        }
    
    ?>
</body>
</html>