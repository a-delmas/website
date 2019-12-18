        <!-- VARIABLE -->
        <section class="variable">

            <!-- Ouvrir le terminal dans le dossier ou se trouve ce fichier. -->
            <!-- Entrer la commande suivante: php -S 127.0.0.1:8080 -->
            <!-- Dans votre navigateur utiliser l'adresse 127.0.0.1:8080 -->

            <a href="https://apprendre-php.com/tutoriels/tutoriel-6-les-variables.html" target="_blank"><h2>PHP - Les variables</h2></a>

            <h4>Exercice 1</h4>
            <!-- Créer une variable nom et l'initialiser avec la valeur de votre choix. Afficher son contenu. -->
            
            <?php

                $nom = "Aurore";
                echo $nom;

            ?>
                        
            <h4>Exercice 2</h4>
            <!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. -->
            <!-- Attention age est de type entier. Afficher leur contenu. -->

            <?php

                $nom = "Delmas";
                $prenom = "Aurore";
                $age = 30;
                echo $nom . '<br>';

                echo $prenom . '<br>';
                echo $age;

            ?>

            <h4>Exercice 3</h4>
            <!-- Créer une variable km. L'initialiser à 1. Afficher son contenu. -->
            <!-- Changer sa valeur par 3. Afficher son contenu. -->
            <!-- Changer sa valeur par 125. Afficher son contenu. -->

            <?php

                $km = 1;
                echo $km . '<br>';

                $km = 3;
                echo $km . '<br>';

                $km = 125;
                echo $km;

            ?>         

            <h4>Exercice 4</h4>
            <!-- Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix. -->
            <!-- Les afficher. -->

            <?php

                $string = "Aurore";
                $int = 30;
                $float = 15.5;
                $boolean = true;

                echo $string . '<br>';
                echo $int . '<br>';
                echo $float . '<br>';
                echo $boolean;

            ?>
      

            <h4>Exercice 5</h4>
            <!-- Créer une variable de type float. L'initialiser à 1. Afficher son type. -->
            <!-- Changer sa valeur par 4.8 et afficher son contenu. -->

            <?php

                $float = 1;
                echo gettype($float);
                var_dump($float);
                echo $float . '<br>';

                $float = 4.8;
                echo $float;

            ?>         

            <h4>Exercice 6</h4>
            <!-- Créer une variable nom et l'initialiser avec la valeur de votre choix. -->
            <!-- Afficher : "Bonjour" + nom + ", comment vas tu ?". -->

            <?php

                $nom = "Aurore";
                echo 'Bonjour ' . $nom . ', comment vas-tu ?';

            ?>
        
            <h4>Exercice 7</h4>
            <!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. -->
            <!-- Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans". -->

            <?php

                $nom = "Delmas";
                $prenom = "Aurore";
                $age = 30;
                echo 'Bonjour ' . $nom . ' ' .  $prenom . ', tu as ' . $age . ' ans.';

            ?>          

            <h4>Exercice 8</h4>
            <!-- Créer 3 variables. -->
            <!-- Dans la première mettre le résultat de l'opération 3 + 4. -->
            <!-- Dans la deuxième mettre le résultat de l'opération 5 * 20. -->
            <!-- Dans la troisième mettre le résultat de l'opération 45 / 5. -->
            <!-- Afficher le contenu des variables. -->

            <?php

                $num1 = 3 + 4;
                echo $num1 . '<br>';
                $num2 = 5 * 20;
                echo $num2 . '<br>';
                $num3 = 45 / 5;
                echo $num3;

            ?>
          
        </section><!-- /variable -->