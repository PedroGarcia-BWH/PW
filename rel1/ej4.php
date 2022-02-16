<html>

<head>Ej4<title></title></head>
<body>
    <h1>Ejercicio 4</h1>
    <?php 
    $contador = 1;
    echo "<table>";
    for($i=1; $i<=10; $i++)
    {
        for($j=1; $j<=10; $j++){
            
            //echo "<tr>";
            echo "  <th> $contador  </th>";

            $contador = $contador +1;
        }
        echo "<tr>";
    }
    echo "</table>";
    ?>
</body>
</html>