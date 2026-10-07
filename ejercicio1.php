<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Actividad 2.5</title>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <form action="ejercicio1.php" method="get">

        <h4>Prendas</h4>

        <div>
            <input type="checkbox" id="camiseta" name="prendas[]" value="camiseta">
            <label for="camiseta">Camiseta</label>
        </div>

        <div>
            <input type="checkbox" id="pantalon" name="prendas[]" value="pantalon">
            <label for="pantalon">Pantalón</label>
        </div>

        <div>
            <input type="checkbox" id="chaqueta" name="prendas[]" value="chaqueta">
            <label for="chaqueta">Chaqueta</label>
        </div>

        <div>
            <input type="checkbox" id="falda" name="prendas[]" value="falda">
            <label for="falda">Falda</label>
        </div>

        <h4>Color</h4>

        <div>
            <label for="color">Seleccione un color</label>
            <input type="color" id="color" value="#ff0000" name="color">
        </div>


        <button type="submit">Enviar</button>

    </form>
    <?php
    
    if(isset($_GET["prendas"])){
        $prendas = $_GET["prendas"];
        foreach($prendas as $prenda){
            echo "<p>Prenda seleccionada:". htmlspecialchars($prenda)."</p>";
        }
    }
    if(isset($_GET["color"])){
        $color= htmlspecialchars($_GET["color"]);
        echo "<p> El color seleccionado es <span style='background-color:$color'>$color</span></p>";
    }

    

    ?>


</body>

</html>