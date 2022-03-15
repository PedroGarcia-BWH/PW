<html>
    <body>
        <h1>Gestión de preguntas para Examenes<h1>
        <?php 
            $enlace = mysqli_connect("127.0.0.1","root","", "bduca");
            // $user = $_POST["user"];
            $user = "1";
            $nombre = mysqli_query($enlace, "select * from usuario where id_usuario = $user ");
            $nfilas = mysqli_num_rows ($nombre);

            for ($i=0; $i<$nfilas; $i++)
            {
                $fila = mysqli_fetch_array ($nombre);
                
                $nombre = $fila["nombre"];
                $apellido = $fila["apellido"];
                
                echo "Bienvenido $nombre $apellido";
            }
            echo "<br /> Seleccione la asignatura: <br />";
            $consulta = mysqli_query($enlace, "select * from asignatura where id_profesor = $user ");
            
            $nfilas = mysqli_num_rows ($consulta);
            echo "<form action = temas.php method='post'>";
            for ($i=0; $i<$nfilas; $i++)
            {
                $fila = mysqli_fetch_array ($consulta);
                echo "<br>";
                $asig = $fila["nombre_asig"];
                $id = $fila["id_asig"];
                echo "<input name='seleccion' type='radio' value = $id />$asig";
            }
            echo "<br>";
            echo "<input type='submit' value= 'Aceptar'>";
            echo "<form>";

           /* if($_POST){
                $id_asig = $_POST["seleccion"];
                $consulta = mysqli_query($enlace, "select * from tema where id_asignatura = $id_asig ");
                
                echo "<br /> Seleccione el tema: <br />";

                $nfilas = mysqli_num_rows ($consulta);
                echo "<form method='post'>";
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
                }*/

            mysqli_close ($enlace);
        ?>
        <br><form "method="post">Seleccione la acción<br>
        <input name="accion" type="radio" value = "create" checked="checked" />Crear<br>
        <input name="accion" type ="radio" value="modify" />Modificar<br>
        <input name="accion" type ="radio" value="delete" />Eliminar<br>
        <input type="submit" value= "enviar">
        <form>

        <?php
            if($_POST){
                $enlace = mysqli_connect("127.0.0.1","root","", "bduca");
                switch($_POST["accion"]){
                    case "create":
                        echo "<br>Introduzca la pregunta:<br>";
                        echo "<br><input type='text' name='pregunta'><br>";
                
                        echo "<br><form method='post'><br>";
                        echo "<br>Seleccione la respuesta correcta y seleccione enviar una vez introducido los datos:<br>";
                        echo "<br /><input name='correcta' type='radio' value = 'res1' checked='checked' />Respuesta 1 =
                        <input type='text' name='respuesta1'><br />";
                        echo "<br><input name='correcta' type ='radio' value='res2' />Respuesta 2 = <input type='text' name='respuesta2'><br>";
                        echo "<br><input name='correcta' type ='radio' value='res3' />Respuesta 3 =<input type='text' name='respuesta3'><br>";
                        echo "<br><input name='correcta' type ='radio' value='res3' />Respuesta 4 =<input type='text' name='respuesta4'><br>";
                        echo "<input type='submit' value= 'enviar'>";
                        echo "<form>";

                        if($_POST){
                            $id_tema = $_POST["tema"];$pregunta= $_POST['pregunta'];$respuesta1 =$_POST["respuesta1"];$respuesta2 =$_POST["respuesta2"];$respuesta3 =$_POST["respuesta3"];$respuesta4 =$_POST["respuesta4"];$correcta=$_POST["correcta"];
                            $nombre = mysqli_query($enlace, "insert into bateriapreguntas (id_tema, pregunta, opcion1, opcion2, opcion3, opcion4,correcta) values ($id_tema,$pregunta,$respuesta1,$respuesta2,$respuesta3,$respuesta4,$correcta)");
                        }
                                    break;
                    case "modify":

                                    break;
                    case "delete":  
                                    break;
                }

               

                }
        ?>
    <body>
<html>