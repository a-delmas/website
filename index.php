<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php</title>
</head>
<body>

    <main>

        <h1>Introduction à PHP</h1>
        
        <?php require "variables.php"; ?>

        <?php require "conditions.php"; ?>

        <?php require "boucles.php"; ?>

        <!-- TABLEAU -->
        <section class="array">
        
            <a href="https://apprendre-php.com/tutoriels/tutoriel-7-les-tableaux-ou-arrays.html" target="_blank"><h2>PHP - Les tableaux (ou array)</h2></a>

            <h4>Exercice 1</h4>
            <!-- #PHP - Les tableaux ##Exercice 1 Créer un tableau mois et l'initialiser avec les valeurs suivantes : -->

                <!-- janvier -->
                <!-- février -->
                <!-- mars -->
                <!-- avril -->
                <!-- mai -->
                <!-- juin -->
                <!-- juillet -->
                <!-- aout -->
                <!-- septembre -->
                <!-- octobre -->
                <!-- novembre -->
                <!-- décembre -->

                <?php

                    $mois = array('janvier','février','mars','avril','mai','juin','juillet','aout', 'septembre','octobre', 'novembre', 'décembre');
                ?>          

            <h4>Exercice 2</h4>
            <!-- Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau. -->
           
            <?php

                $mois = array('janvier','février','mars','avril','mai','juin','juillet','aout', 'septembre','octobre', 'novembre', 'décembre');
                echo $mois[2];
            ?>
          
            <h4>Exercice 3</h4>
            <!-- Avec le tableau de l'exercice , afficher la valeur de l'index 5. -->
            
            <?php

                $mois = array('janvier','février','mars','avril','mai','juin','juillet','aout', 'septembre','octobre', 'novembre', 'décembre');
                echo $mois[5];
            ?>          

            <h4>Exercice 4</h4>
            <!-- ##Exercice 4 Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. -->
            
            <?php
                $mois = array('janvier','février','mars','avril','mai','juin','juillet','aout', 'septembre','octobre', 'novembre', 'décembre');
                $mois = strtr($mois[7], 'aout', 'août');
                echo $mois;
            ?>          

            <h4>Exercice 4</h4>
            <!-- Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom. -->
            
            <?php

                $num = array(02, 59, 60, 62, 80);
                $value = array('Aisne', 'Nord', 'Oise', 'Pas-de-Calais', 'Somme');
            
            ?>
         
            <h4>Exercice 6</h4>
            <!-- ##Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 59. -->
            
            <?php

                $num = array(02, 59, 60, 62, 80);
                $value = array('Aisne', 'Nord', 'Oise', 'Pas-de-Calais', 'Somme');
                echo $value[1];

            ?>          

            <h4>Exercice 7</h4>
            <!-- Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. -->
            
            <?php
                $num = array(02, 51, 59, 60, 62, 80);
                $values = array('Aisne', 'Marne', 'Nord', 'Oise', 'Pas-de-Calais', 'Somme');

            ?>
          

            <h4>Exercice 8</h4>
            <!-- Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->
            <!-- <?php

                $mois = array('janvier','février','mars','avril','mai','juin','juillet','aout', 'septembre','octobre', 'novembre', 'décembre');
            
                while($mois>=12) {
                echo $mois . '<br/>';
                $mois++;
                }
            
            ?>        -->

            <h4>Exercice 9</h4>
            <!-- ##Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->
            <?php

            ?>
        

            <h4>Exercice 10</h4>
            <!-- 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. -->
            <!-- Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement -->
            <?php

            ?>
         

        </section><!-- /array -->
        
        <!-- DATE -->
        <section class="date">

             <a href="https://www.php.net/manual/fr/function.date.php" target="_blank"><h2>PHP - Les dates</h2></a>

            <h4>Exercice 1</h4>
            <!-- Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016) -->
            <?php

            ?>
          

            <h4>Exercice 2</h4>
            <!-- Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16) -->
            <?php

            ?>
          

            <h4>Exercice 3</h4>
            <!-- Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016) -->
            <?php

?>
          

            <h5>Bonus</h5>
            <!-- Bonus : Le faire en français. -->
            <?php

            ?>
          

            <h4>Exercice 4</h4>
            <!-- Afficher le timestamp du jour. -->
            <!-- Afficher le timestamp du mardi 2 août 2016 à 15h00. -->
            <?php

            ?>
          

            <h4>Exercice 5</h4>
            <!-- 5 Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016. -->
            <?php

            ?>
          

            <h4>Exercice 6</h4>
            <!-- Afficher le nombre de jour dans le mois de février de l'année 2016. -->
            <?php

            ?>
         

            <h4>Exercice 7</h4>
            <!-- Afficher la date du jour + 20 jours. -->
            <?php

            ?>
          

            <h4>Exercice 8</h4>
            <!-- Afficher la date du jour - 22 jours -->
            <?php

            ?>
          

            <h4>Exercice FINAL</h4>
            <!-- Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année. -->
            <!-- En fonction des choix, l'afficher dans un calendrier -->
            <?php

            ?>
        </section>

    </main>

</body>
</html>