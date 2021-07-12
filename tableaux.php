<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les tableaux</title>
</head>
<body>
<?php
    // $prenoms = array('abel','paul','jacques');
    // affichage d'un tableau numerotE avec la boucle for
    // for($x=0;$x<= 2; $x++){
    //     echo $prenoms[$x].'<br>';
    // }
    // affichage d'un tableau numerotE avec la boucle foreach
    // foreach($prenoms as $items){
    //     echo $items.'<br>';
    // }
    // $prenoms[0]= 'abel';
    // $prenoms[1]= 'paul';
    // $prenoms[2]= 'jacques';
    // tableau associatif
    // $age= array(
    //     'abel' =>24,
    //     'paul' =>18,
    //     'jacques' => 'non renseignE',
    // );
    //affichage d'un tableau associatif avec la boucle foreach
    // foreach($age as $items){
    //     echo $items.'<br>';
    // }
    //pour recuperer la cle et la valeur
    // foreach($age as $clef => $items){
    //     echo 'l\'age de '.$clef. ' est ' .$items.'.<br>';
    // }
    //pour afficher le tableau avec la fonction print_r
    //c'est utilisE souvent pour le debogage
    // echo'<pre>';
    // print_r($age);
    // echo '</pre>';


    // ce tableai de facon manuel
    // $age['abel']=24;
    // $age['paul']=18;
    // $age['jacques']='non renseignE';
    // echo $prenoms[1].'<br>';
    // echo $age['abel']. '<br>';


    //les tableaux multidiemensionnels
    $membres = array(
        array('pierre','24','pierre@gmail.com'),
        array('paul','22','paul@gmail.com'),
        array('jacques','36','jacques@gmail.com')
    );
    //affichage du tableau multidimensionnel
    // echo $membres[0][0]. ' a ' .$membres [0][1]. 'ans. son mail est : '.$membres[0][2]. '.<br>';
    // echo $membres[1][0]. ' a ' .$membres[1][1]. 'ans. son mail est : '.$membres[1][2]. '.<br>';
    // echo $membres[2][0]. ' a ' .$membres[2][1]. 'ans. son mail est ; ' .$membres[2][2]. '.<br>';
    //affichage avec la boucle for
    for($ligne=0;$ligne<3;$ligne++){
        $membres_no =$ligne+1;
        echo 'membre numero' .$membres_no. '<br>';
        echo '<ul>';
        for($col=0; $col<3; $col++){
            echo '<li>' .$membres[$ligne][$col]. '</li>';
        }
        echo '</ul>';
    }


    $eleve = array(
        array('abel','bin','kandanda','G3'),
        array('josue','zihalirwa','joe','L1'),
        array('exaucE', 'mwililikwa','mutindi','L2'),
        array('nbj','nkango','joel','G2')
    );
    for($ligne=0;$ligne<4;$ligne++){
        $eleve_no=$ligne+1;
        echo 'eleve numero ' .$eleve_no. '.<br>';
        echo '<ul>';
        for($col=0;$col<4; $col++){
            echo '<li>' .$eleve[$ligne][$col].'</li>';
        }
        echo '</ul>';
    }
    //fin boucle for
    $famille = array(
        array('chris','kakasu','kandanda'),
        array('caleb','serge','kandanda'),
        array('divine','nzeba','kandanda'),
        array('abel','ilunga','kandanda'),
        array('merveilles','njilabu','kandanda'),
        array('benedicte','mundi','kandanda')
    );
    for($ligne=0;$ligne<6;$ligne++){
        $famille_no=$ligne+1;
        echo 'famille numero ' .$famille_no. '.<br>';
        echo '<ul>';
        for($col=0;$col<3;$col++){
            echo '<li>' .$famille[$ligne][$col]. '.</li>';
        }
        echo '</ul>';
    }

?>
</body>
</html>