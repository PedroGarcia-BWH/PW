<html>

<head>Ej12<title></title></head>
<body>
    <h1>Ejercicio 12</h1>
    <form method="post">
        Selecciona la moneda a convertir
        <br />
        <input name="seleccion" type="radio" value = "rbilibras" checked="checked" />Libras
        <br />
        <input name="seleccion" type ="radio" value="rbidolares" />Dolares
        <form>
    <form method="post">
    <br />
    Introduzca dinero:
    <br />
    <input name="dinero" type="text" size="8"/>
    <br/>
    <form>
    <?php 
    if($_POST){
        if($_POST["seleccion"] == "rbilibras"){
            $result = $_POST["dinero"] *0.83; 
        }else{
            $result = $_POST["dinero"] *1.14; 
        }

        print "Resultado: $result";
        }
    
    ?>
</body>
</html>