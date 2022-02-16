<html>

<head>Ej6<title></title></head>
<body>
    <h1>Ejercicio 6</h1>
    <?php 

    function potencia($num, $exp){
        return pow($num, $exp);
    }
    echo "<table>";
    for($i=1; $i<=4; $i++)
    {
        for($j=1; $j<=4; $j++){
            
            //echo "<tr>";
            $aux = potencia($i,$j);
            echo "  <th> $aux </th>";
        }
        echo "<tr>";
    }
    echo "</table>";
    ?>
</body>
</html>