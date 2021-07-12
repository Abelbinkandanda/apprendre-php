<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les conditions</title>
</head>
<body>
    <?php

    // $heure_connexion = 15;
    // if($heure_connexion < 18){
    //     echo 'passez une bonne day <br/>';
    //     $journee = "oui";
    // }
    // elseif($heure_connexion >20){
    //     echo 'passez une excellente night <br/>';
    //     $journee = "non";
    // }
    // else{
    //     echo 'hello world <br/>';
    //     $journee = "yeah";
    // }
    // echo 'fait-il jour? la reponse est ' .$journee.'.';
    
    // $note = 12;
    // $difficulte = "facile";
    // if($note <= 12 AND $difficulte == "facile" ){
    //     echo "c'est nul!";
    // }
    // elseif($note > 12 AND $difficulte =="facile"){
    //     echo "pas mal, mais c'etait facile";
    // }
    // elseif($note < 12 AND $difficulte== "difficile"){
    //     echo "ne vous decouragez pas, c'etait difficile";
    // }
    // else{
    //     echo "bravo";
    // }
    // if($difficulte == "facile" OR $difficulte == "moyen"){
    // echo "<br>ce controle n'etait pas difficile";
    // }
    // else{
    //     echo "<br> ce controle etait dur, non ?";
    // }

    // $note = 18;
    // if($note==0){
    //     echo "tu es nul";
    // }
    // elseif($note== 4){
    //     echo "c'est tres mauvais";
    // }
    // elseif($note== 8){
    //     echo "ce n'est pas bon";
    // }
    // elseif($note == 12){
    //     echo "c'est moyen ";
    // }
    // elseif($note == 16){
    //     echo "bien jouE";
    // }
    // elseif($note==20){
    //     echo "parfait";
    // }
    // else{
    //     echo "je n'ai pas de commentaire pour cette note";
    // }
    // switchcase
        // $note = 8;
        // switch($note){
        //     case 0:
        //         echo "tu es nul";
        //         break;
        //     case 4:
        //         echo "c'est tres mauvais";
        //         break;
        //     case 8:
        //         echo "ce n'est pas bon";
        //         break;
        //     case 12:
        //         echo "c'est moyen";
        //         break;
        //     case 16:
        //         echo "bien jouE";
        //         break;
        //     case 20:
        //         echo "parfait";
        //         break;
        //     default :
        //     echo "je n'ai pas de commenraire pour cette note";
        // }
        $etudiant = true;
        // if($etudiant== true){
        //     echo "vous etes etudiant";
        // }
        // else{
        //     echo "vous n'etes pas etudiant";
        // }
// fin

        // if($etudiant){
        //     echo "vous etes etudiant";
        // }
        // else{
        //     echo "vous n'etes pas etudiant";
        // }
        // if(! $etudiant){
        //     echo "vous n'etes pas etudiant";
        // }
        // else{
        //     echo "vous etes etudiant";
        // }
        // fin
        ?>


<!-- <?php

            if($etudiant){
                ?>
                <h1>masomo</h1>
                <p>vous etes etudiant</p>
                <?php
            }

    ?> -->
<!-- fin -->
<!-- conditions ternaires -->
    <?php
        $age= 24;

        if($age>=18){
            $autorisation = true;
        }
        else{
            $autorisation = false;
        }
        // debut condition ternaire
        $autorisation = ($age>=18)? true : false;
        // fin condition ternaire
    ?>
</body>
</html>