        <!-- BOUCLE -->
        <section class="loop">

            <a href="https://apprendre-php.com/tutoriels/tutoriel-10-les-structures-de-contrle-les-boucles.html" target="_blank"><h2>PHP - Les boucles</h2></a>

            <h4>Exercice 1</h4>
            <!-- Créer une variable et l'initialiser à 0. -->
            <!-- Tant que cette variable n'atteint pas 10, il faut : -->

                <!-- l'afficher -->
                <!-- l'incrémenter -->

                <?php

                    $var = 0;

                    while ($var<10) {
                        echo 'Variable' , $var, '<br>';
                        $var++;
                    }

                ?>
        
            <h4>Exercice 2</h4>
            <!-- Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre aléatoire compris en 1 et 100. -->
            <!-- Tant que la première variable n'est pas supérieur à 20 : -->

                <!-- multiplier la première variable avec la deuxième -->
                <!-- afficher le résultat -->
                <!-- incrémenter la première variable -->

                <?php

                    $var1 = 0;
                    $var2 = rand(1, 100);

                    while ($var1 < 20) {
                        echo $var1*$var2 . '<br>';
                        $var1++;
                    }

                ?>
          
            <h4>Exercice 3</h4>
            <!-- Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre aléatoire compris en 1 et 100. -->
            <!-- Tant que la première variable n'est pas inférieur ou égale à 10 : -->

                <!-- la première variable avec la deuxième -->
                <!-- afficher le résultat -->
                <!-- décrémenter la première variable -->

                <?php

                    $var1 = 100;
                    $var2 = rand(1, 100);

                    while ($var1 >= 10) {
                        echo $var1*$var2 . '<br>';
                        $var1--;
                    }

                ?>
          
            <h4>Exercice 4</h4>
            <!-- Créer une variable et l'initialiser à 1. -->
            <!-- Tant que cette variable n'atteint pas 10, il faut : -->

                <!-- l'afficher -->
                <!-- l'incrementer de la moitié de sa valeur -->

            <?php

                $var = 1;
                
                while ($var < 10) {
                    echo $var . '<br>';
                    $var += ($var/2);
                }

            ?>    

            <h4>Exercice 5</h4>
            <!-- En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. -->

            <?php

                $pas = 1;

                for($pas=1; $pas<=15; $pas++)
                {
                echo $pas . ' On y arrive presque' . '<br/>';
                }

          ?>     

            <h4>Exercice 6</h4>
            <!-- En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. -->
            
            <?php

                $pas = 20;

                for($pas=20; $pas>=0; $pas--) {
                echo $pas . " C'est presque bon" . '<br/>';
                }
            
            ?>   
      
            <h4>Exercice 7</h4>
            <!-- En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. -->
            
            <?php

                $pas = 1;

                for($pas=1; $pas<=100; $pas+= 15)
                {
                echo $pas . ' On tient le bon bout' . '<br/>';
                }

            ?>       
          
            <h4>Exercice 8</h4>
            <!-- En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. -->
            <?php

                $pas = 200;

                for($pas=200; $pas>=0; $pas-= 12)
                {
                echo $pas . ' Enfin !!!!' . '<br/>';
                }
            
          ?>      
          
        </section><!-- /loop -->