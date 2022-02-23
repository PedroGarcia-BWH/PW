<html>
<body>
    <h1> Resultados</h1>   
    <?php 
        $enlace = mysqli_connect("127.0.0.1","cursophp","", "lindavista");

        $consulta = mysqli_query($enlace, "select * from noticias");
        echo "<table border =2 >";
        echo "<th>";
        echo "Respuesta";
        echo "  <th> ";
        echo "Votos";
        echo "  <th> ";
        echo"Porcentaje";
        echo "  <th> ";
        echo "Representacion Gráfica";
        //echo "  <th> ";
        echo "<tr>";
        foreach($consulta as $filas)
        {
            echo "<th>";
            echo $filas["titulo"];
            echo "<th>";
            echo $filas["texto"];
            echo "<th>";
            echo $filas["categoria"];
            echo "<th>";
            echo $filas["fecha"];
            echo "<th>";
            echo $filas["imagen"];
            echo "<tr>";
        }
        
        //echo "<tr>";
    
    echo "</table>";
    ?>
    <br />
        <a href= "./ejercicio2.php">Volver a encuesta</a>
</body>
</html>