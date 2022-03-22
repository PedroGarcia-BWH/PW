<html>
<head>
        <title>Menu profesorado</title>
        <style type="text/css">
            *{
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                position: relative;
            }

            p, h2{
                margin: 0;
                padding: 0;
                height: fit-content;
            }

            h2{
                background-color: lightgray;
                padding: 5px;
                padding-left: 10px;
                border-radius: 5px;
            }

            #head{
                height: fit-content;
                display: flex;
                justify-content: space-between;
            }

            #head h3{
                margin: 0;
            }

            #title{
                text-align: center;
                border: 2px solid;
                background-color: #97CAEF;
                font-size: larger;
            }

            body{
                padding: 20px 40px;
                max-width: 800px;
                margin: 0px auto;
            }

            .menu{
                border: 2px solid;
                margin-top: 20px;
                margin-bottom: 10px;
            }

            .menu form{
                margin: 0px;
            }

            .menu button{
                width: 100%;
                height: 3em;
            }

            #cerrar-sesion{
                height: fit-content;
                text-decoration: underline;
                font-size: small;
                cursor: pointer;
                color: blue;
                margin: auto 1px;
            }

            table{
                width: calc(100% - 20px);
                text-align: center;
                border: 2px solid;
                border-collapse: collapse;
                margin: 0 auto;
                margin-top: 10px;
            }

            th, tr, td{
                border: 2px solid black;
            }
            .textbox{
                width:50%;
            }
        </style>
    </head>
    <body>
        <h1>Gestión de preguntas para Examenes<h1>
        <br><form method="post">Seleccione la acción que desea hacer<br>
        <input name="accion" type="radio" value = "create" checked="checked" />Crear<br>
        <input name="accion" type ="radio" value="modify" />Modificar<br>
        <input name="accion" type ="radio" value="delete" />Eliminar<br>
        <input type="submit" value= "enviar">
        <form>

        <?php
         $enlace = mysqli_connect("127.0.0.1","root","", "bduca");
        if($_POST['accion']){
            if($_POST['accion'] == "create"){
               
                echo "<br>Introduzca la pregunta:<br>";
                echo "<br><input class='textbox' type='text' name='pregunta'><br>";
                    
                echo "<br><form method='post'><br>";
                echo "<br>Seleccione la respuesta correcta y seleccione enviar una vez introducido los datos:<br>";
                echo "<br /><input name='correcta' type='radio' value = 'res1' checked='checked' />Respuesta 1 =
                <input class='textbox' type='text' name='respuesta1'><br />";
                echo "<br><input name='correcta' type ='radio' value='res2' />Respuesta 2 = <input class='textbox' type='text' name='respuesta2'><br>";
                echo "<br><input name='correcta' type ='radio' value='res3' />Respuesta 3 =<input class='textbox' type='text' name='respuesta3'><br>";
                echo "<br><input name='correcta' type ='radio' value='res3' />Respuesta 4 =<input class='textbox' type='text' name='respuesta4'><br>";
                echo "<input type='submit' value= 'enviar'>";
                echo "<form>";
    
                if($_POST['correcta'])
                {
                        $id_tema = $_POST["tema"];$pregunta= $_POST['pregunta'];$respuesta1 =$_POST["respuesta1"];$respuesta2 =$_POST["respuesta2"];$respuesta3 =$_POST["respuesta3"];$respuesta4 =$_POST["respuesta4"];$correcta=$_POST["correcta"];
                        $nombre = mysqli_query($enlace, "insert into bateriapreguntas (id_tema, pregunta, opcion1, opcion2, opcion3, opcion4,correcta) values ($id_tema,$pregunta,$respuesta1,$respuesta2,$respuesta3,$respuesta4,$correcta)");
                }
                       
                }
         }
        

               

                
        ?>
    <body>
<html>