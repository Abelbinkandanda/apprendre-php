<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notions sur les variables en Php</title>
</head>
<body>
    <?php
    // $departement = "var";
    // $chiffre = 83;
    // echo "$departement est un département de France <br/>";
    // echo "$chiffre <br/>";
    // echo 'le ' .$departement. ' est un département de France <br/>';
    $nombre1= 5;
    $nombre2= 3;
    $addition =$nombre1 + $nombre2;
    $soustraction =$nombre1 - $nombre2;
    $multiplication=$nombre1 * $nombre2;
    $division= $nombre1 / $nombre2;
    $modulo= $nombre1 % $nombre2;
    echo 'addition :' .$addition. '<br>';
    print 'soustraction :' .$soustraction. '<br>';
    print 'multiplication :' .$multiplication. '<br>';
    print 'division :' .$division. '<br>';
    print 'modulo :' .$modulo. '<br>';

    print $nombre1. '+' .$nombre2;
    
 
    ?>
</body>
</html>