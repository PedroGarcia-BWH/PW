<html>
<body>
    <h1> Resultados</h1>   
    <?php 
        $enlace = mysqli_connect("127.0.0.1","cursophp","", "lindavista");

        $consulta = mysqli_query($enlace, "select * from votos");
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
            $total = $filas["votos1"] + $filas["votos2"];
            $porcentaje1 = $filas["votos1"] / $total *100;
            $porcentaje2 = $filas["votos2"] / $total *100;
            echo "  <th> ";
            echo "A favor";
            echo "<th>";
            echo $filas["votos1"];
            echo "<th>";
            echo "$porcentaje1%";
            echo "<th>";
            echo "<tr>";
            echo "  <th> ";
            echo "En contra";
            echo "  <th> ";
            echo $filas["votos2"];
            echo "<th>";
            echo "$porcentaje2 %";
            echo "<th>";
        }
        
        //echo "<tr>";
    
    echo "</table>";
    ?>
    <br />
        <a href= "./ejercicio2.php">Volver a encuesta</a>
</body>
</html>