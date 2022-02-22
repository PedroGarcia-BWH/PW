<html>

<head>Ejercicio1 <title></title></head>
<body>
    <h1>Ejercicio 1</h1>
    <?php 
    $enlace = mysqli_connect("127.0.0.1","cursophp","", "lindavista");

    $consulta = mysqli_query($enlace, "select * from noticias");


    echo "<table border =2 >";
        echo "<th>";
        echo "Titulo";
        echo "  <th> ";
        echo "Texto";
        echo "  <th> ";
        echo"Categoria";
        echo "  <th> ";
        echo "Fecha";
        echo "  <th> ";
        echo "Imagen";
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
    mysqli_close ($enlace);
    ?>
</body>
</html>