
<?php
 if (isset($_POST['calcular'])) {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];

   
        $nombreCompleto = $n1 . " " . $n2;

        $longitud = strlen($nombreCompleto);
        $nombre2 = strlen($n2);
        $nombre1 = strlen($n1);

        if (str_contains(strtolower($n2), 'a')) {
        $n2f=$nombre2+15;
        } 
        else {
        $n2f=$nombre2;
        }
        if (str_contains(strtolower($n1), 'a')) {
        $n1f=$nombre1+15;
        } 
        else {
        $n1f=$nombre1;
        }
    }
        $porcentaje=$n1f+$n2f+random_int(0,30);

        
    $ship1 = substr($n1, 0, 2);
    $ship2 = substr($n2, 0, 2); 
    $ship = $ship1 . $ship2; 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CALCU.CSS">
</head>
<body>
    <h1> ｡ﾟ•┈୨♡୧┈•ﾟ｡Calculadora del Amor ｡ﾟ•┈୨♡୧┈•ﾟ｡</h1>
    <div class="amor1" id="porcentaje">
        <p class="amor">
         <?php echo $n1;?>
        </p>
        <br>
         <p class="amor">
        <?php echo $n2;?>
        </p>
        <br>
         <p class="amor">
        Compatibilidad: <?php echo $porcentaje;?>%
        </p>
        <br>
         <p class="amor">
        Ship name:<?php echo $ship;?>
        </p>




    </div>
</body>
</html>