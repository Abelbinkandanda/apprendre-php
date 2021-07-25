<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonctions suite</title>
</head>
<body>
    <!-- function affectant les tableaux -->
    <?php
//    $voiture= array(
//        "citroen" => "DS3",
//        "Renault" => "Clio",
//        "Peugeot" => "306",
//        "Peugeot2" => 306
//    );
//    ;
//    echo "<pre>";
//    print_r(array_keys($voiture,306,true));
//    echo "</pre>";

// function array_values
    // $loisirs= array(
    //     "sport" => "travail",
    //     "voyage" => "ecosse",
    //     "musique"=> "guitare"
    // );
    // echo "<pre>";
    // print_r(array_values($loisirs));
    // echo "</pre>";


    // function array_key_exists
    // $voiture= array(
    //            "citroen" => "DS3",
    //            "Renault" => "Clio",
    //            "Peugeot" => "306",
    //        );
    //     if(array_key_exists("citroen",$voiture)){
    //         echo "la clef existe";
    //     }
    //         else{
    //             echo "la clef n'existe pas";
    //         }


    // function array_search
        
    // $voiture= array(
    //                "citroen" => "DS3",
    //                "Renault" => "Clio",
    //                "Peugeot" => "306",
    //            );
    // echo array_search("DS3",$voiture, true);
    //  function in_array
    // $prenom = array("pierre","paul","jacques",304);
    // if(in_array("304",$prenom,true)){
    //     echo "prenom trouvE";
    // }else{
    //     echo "prenom non trouvE";
    // }




    // fonctions qui vont nous permettre de compter
        //function count
    // $sport=array("natation","velo","course");
    //     echo count($sport);

    //function array_count_values

        // $compter = array("A","velo","natation","natation","A","velo");
        // echo "<pre>";
        // print_r( array_count_values($compter));
        // echo "</pre>";

        // function array_diff_assoc permet de comparer les elements de deux tableaux et envoyer la difference

        $comparer = array("a" => "bleu", "b" => "vert", "c"=> "jaune");
        $comparant = array  ("c" =>"bleu", "b" => "vert");
        // echo "<pre>";
        // print_r( array_diff_assoc($comparer,$comparant));
        // print_r( array_diff_key($comparer,$comparant));
        // print_r( array_diff($comparer,$comparant));
        // echo "</pre>";


        //function array_intersect_assoc permet de comparer deux tableaux en revoyant le resulat en similitude 
        // echo "<pre>";
        // print_r(array_intersect_assoc($comparer,$comparant));
        // echo "</pre>";
        // echo "<pre>";
        // print_r(array_intersect_key($comparer,$comparant));
        // echo "</pre>";
        // echo "<pre>";
        // print_r(array_intersect($comparer,$comparant));
        // echo "</pre>";


        //les fx qui permettent de supprimer ou d'ajouter des elements dans le tableau

        // print_r(array_fill(0, 5, "vert"));


        // $remplissage = array_fill(0, 5, "vert");
        // print_r($remplissage);

        //fonction array_fill_keys
        // $clefs = array("a","b","c","d");
        // $remplir = array_fill_keys($clefs,"bleu");
        // print_r($remplir);


        //function array_push et array_pop permettent d'inserer des elements en fin de tableau et supprimer des elements en fin de tableau
        
        // $couleur = array("bleu","vert");
        // array_push($couleur,"jaune","orange");
        // print_r($couleur);

        // array_pop($couleur);
        // print_r($couleur);


        //fonctions pour inserer ou supprimer les elements au debut du tableau 

        // array_unshift($couleur,"jaune","violet");
        // print_r($couleur);

        // array_shift($couleur);
        // print_r($couleur);


        //fonctions qui permet de supprimer certains elements du tableau a partir d'une certaine position et ajouter d'autres elements array_splice
        
        // $couleur1 = array("a" => "bleu", "b" => "vert", "c"=> "jaune");
        // $couleur2 = array("a" => "rouge", "b" => "violet");
        // print_r(array_splice($couleur1, 1, 2, $couleur2));
        // // array_splice($couleur1,"1");
        // print_r($couleur1);


        //fonctions pour triller et combiner des tableaux array_merge pour combiner les tableaux

        // $alpha = array("a","b");
        // $beta = array("c","d");

        // $omega=array_merge($alpha,$beta);
        // print_r($omega);

        // $omega =array_combine($alpha,$beta);
        // print_r($omega);



        //fonctions array_unique supprimer le doublon d'un tableau
        //$prenom = array("pierre","paul","pierre","jacques");
        //array_unique($prenom);
        // print_r(array_unique($prenom));

        //fonction sort permet de ranger les elements du tableau du plus petit au plus grand
        // $prenoms= array("Pierre","Antoine","Jean");
        // rsort($prenoms);
        // print_r($prenoms);

        //fonctions pour ordonner les tableaux associatifs

        //ksort(); permet de classer un tableau associatifs dans un ordre croissant par rapport a ses clefs
        //krsort(); contraire de ksort

        //asort(); permet de classer un tableau associatifs dans un ordre croissant par rapport a ses valeurs
        //arsort();contraire de asort


        $agenom = array("Pierre" => 24, "Paul"=> 27, "Jean"=>34);
        //ksort($agenom);
        krsort($agenom);
        print_r($agenom);

        //asort($agenom);
        arsort($agenom);
        print_r($agenom);

    ?>
</body>
</html>