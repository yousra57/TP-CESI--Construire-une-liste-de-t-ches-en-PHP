<?php
    $maVariableTitre = "Ma liste de tâches";
    $nomTache = "Nom de la tâche";
    $difficulte="Difficulté de la tâche";
    $terminee=false;
    $tache = [
        'id'=>1,
        'nom'=>"plop",
        'difficulte'=>"ultime",
        'terminee'=>true,
        ];
    $taches = [
        [
        'id'=>1,
        'nom'=>"ranger la chambre",
        'difficulte'=>"hard",
        'terminee'=>false,
        ],
        [
        'id'=>2,
        'nom'=>"ranger la salle de bain",
        'difficulte'=>"hard",
        'terminee'=>true,
        ],
        [
        'id'=>3,
        'nom'=>"ranger la chambre",
        'difficulte'=>"easy",
        'terminee'=>true,
        ],
        [
        'id'=>4,
        'nom'=>"ranger le dressing",
        'difficulte'=>"easy",
        'terminee'=>true,
        ],
        [
        'id'=>5,
        'nom'=>"ranger le bureau",
        'difficulte'=>"moyenne",
        'terminee'=>true,
        ]
        ];

    $total=count($taches);
    $restantes=0;
    $terminees = $total - $restantes;

    echo $total;

    function compterTachesTerminees(){
            echo $taches['terminee'];

        foreach ($taches as $tache){
            if ($taches[terminee]== false){
                $restantes++;
                return $restantes;
                }
        }
    }




    function compterTachesRestantes(array $taches): int
{
    $nombre = 0;

    // Parcourir les tâches et augmenter le compteur si nécessaire.

    return $nombre;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <h1><?php echo $maVariableTitre; ?></h1>
    </title>
</head>

<body>
    <header>
    </header>
    <main>
        <?php
            if ($terminee ===true){
                echo "Vôtre tâche a été effectué avec succès !";}
            else{
                echo "A faire :";
                }?>
            
        <ul>
            <?php foreach ($taches as $tache): ?>
                <li>
                    <!-- Afficher ici les informations de la tâche -->
                <h3><?php echo $tache["nom"]; ?></h3>
                <p>
                    <?php echo $tache["difficulte"]; ?>
                </p>
                <span>
                    <?php echo $tache["terminee"]; ?>
                </span>
                </li>
            <?php endforeach; ?>
        </ul>
     
    </main>    
    <footer>
        <p>&copy; DI 25-27</p>
    </footer>

</body>

</html>

