<html>
<body>
    <?php
     if($_POST){
        $enlace = mysqli_connect("127.0.0.1","root","", "bduca");
        $id_asig = $_POST["seleccion"];
        $consulta = mysqli_query($enlace, "select * from tema where id_asignatura = $id_asig ");
        
        echo "<br /> Seleccione el tema: <br />";

        $nfilas = mysqli_num_rows ($consulta);
        echo "<form action =  method='post'>";
        for ($i=0; $i<$nfilas; $i++)
        {
            $fila = mysqli_fetch_array ($consulta);
            echo "<br>";
            $asig = $fila["nombre_tema"];
            $id = $fila["id_tema"];
            echo "<input name='tema' type='radio' value = $id />$asig";
        }
        echo "<br>";
        echo "<input type='submit' value= 'Aceptar'>";
        echo "<form>";
        }
    ?>
</body>
</html>