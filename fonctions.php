<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les fonctions</title>
</head>
<body>
    <!-- <?php
    // fonction sans argument
    function Bonjour(){
        echo 'bonjour a tous';
    }
    Bonjour();

    //fonction avec argument

    function BonjourUtilisateur($prenom){
        echo '<br> bonjour ' .$prenom. '!<br>';
    }
    BonjourUtilisateur('abel');


    function NomAge($prenom,$age){
        echo '<br> '.$prenom. ' a ' .$age. 'ans';
    }

    NomAge('pierre','24');


    //function avec return
    function DireBonjour(){
        return "<br>Bonjour";
    }

    function DireBonsoir(){
        echo "<br>bonsoir";
    }

    $bonjour = DireBonjour();//la fonction DireBonjour retourne la valeur "Bonjour" qui est stockee dans la variable $bonjour
    $bonsoir = DireBonsoir();//la fonction DireBonsoir echo la valeur "Bonsoir" immediactement mais cette fonction ne retourne aucune valeur
    echo '<br>' .$bonjour. '<br>';
    echo '<br>' .$bonsoir. '<br>';

    ?> -->
    <?php
    //les fonctions relatives aux string
    echo strlen("bonjour papa") .'<br>';//strlen sert a compter le nombre d'octets de la chaine ecrite
    echo str_word_count("bonjour papa").'<br>';//compte les nombres de mots contenu dans la chaine des caracteres
    echo str_word_count("bonjour joe tu vas bien"). '<br>';
    echo str_repeat("bonjour <br>", 7);//permet de repeter la chaine de caractere predefinis par exemple 7 fois
    $texte="bonjour, comment allez-vous?";//exemple pour str_replace
    echo str_replace("bonjour","bonsoir",$texte,$i);//permet de remplace un nombre de caractere choisi par un autre
    echo '<br> Nombre de remplacements : ' .$i. '<br>';//suite pour str_replace
    //les fx strtolower et strtoupper permettent de mettre le texte soit en majuscule ou en minuscule
    $minmaj="bonJour Vous AlleZ bien?";
    echo strtolower($minmaj).'<br>';
    echo strtoupper($minmaj). '<br>';
    //strpos permet de rechercher un caractere specifique dans une chaine de caractere et si la valeur recherchee est trouvee elle retournera la position de celle-ci et si le caractere ne pas retrouver elle retournera la valeur false

    echo strpos("bonjour", "o").'<br>';
    echo strpos("bonjour a tous","tous").'<br>';
    echo strpos("bonjour","e"). '<br>';

    //les fx htmlspecialchras()  permet de convertir les caracteres en entites en html et htmlspecialchars_decode()
    // < va devenir => &lt
    // > => $gt
    // & => &amp
    // " => &quot
    // ' => &#039
    $str = 'j\' aime le <strong>"php"</strong>';
    echo htmlspecialchars($str). '<br>';
    echo htmlspecialchars_decode($str). '<br>';
    //la fonction nl2br permet une bonne mise en page
    echo nl2br("Bonjour !
    comment ca?"). '<br>';
    //explode(),str_split() permettent de casser les chaines de caracteres et le transformer en tableau selon differente maniere,implode(),et join() operation contraire
    $ch2tb = "bonjour a tous";
    print_r(explode(" ",$ch2tb)). '<br><br><br>' ;
    echo "<br>";
    print_r(str_split("Bonjour", 2));
    echo "<br>";


    $tb2ch = array('bonjour','a','tous');
    echo implode(" ",$tb2ch);



    //les fonctions qui affectent les variables tableaux

    
    ?>
    
</body>
</html>