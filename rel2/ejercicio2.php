<html>
<body>
    <h1> Encuesta</h1>
    <form method="post">
       ¿Cree usted que manu es alcoholico?
        <br />
        <input name="seleccion" type="radio" value = "yes" checked="checked" />Si
        <br />
        <input name="seleccion" type ="radio" value="no" />No
        <br />
        <input type="submit" value= "enviar">
        <form>

        <br />
        <a href= "./resultados.php">Motrar Resultados</a>
    <?php 
    if($_POST){
        $enlace = mysqli_connect("127.0.0.1","cursophp","", "lindavista");
        $consulta = mysqli_query($enlace, "select * from votos");
        $fila = mysqli_fetch_array($consulta);
        if($_POST["seleccion"] == "yes") {
            $result =  (int)$fila["votos1"] +1;
            $consulta = mysqli_query($enlace, "update votos set votos1 = $result"); 
        }else{
            $result = (int)$fila["votos2"] + 1;
            $consulta = mysqli_query($enlace, "update votos set votos2 = $result");
        }
    }
    ?>
</body>
</html>