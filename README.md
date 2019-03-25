# learning PHP

*created by A. Mondt*
</br>
*last update March 2019*

## Description

Exercices using PHP

### Requirements

- XAMPP | WAMP | LAMP | MAMP installed

Ubuntu installation e.g.

    sudo apt update
    sudo apt install apache2 php libapache2-mod-php mysql-server php-mysql
    sudo apt install php-curl php-gd php-intl php-json php-mbstring php-xml php-zip

### Instructions

- Open a terminal at the root of the 'learn-php' folder
- Run a php server here, e.g.:

        php -S localhost:8080
- Open a new tab in your browser and type in the URL:

        localhost:8080/the_exercice_file.php | e.g. localhost:8080/calculator/calculator.php

## Exercices

### Summary

- [Les variables](#variables)
- [Les conditions](#conditions)
- [Les boucles](#loops)
- [Les fonctions](#functions)
- [Les tableaux](#tables)
- [Les paramètres](#parameters)
- [Les formulaires](#forms)
- [Les variables globales](#superGlobals)
- [Les dates](#dates)
- [TP: calculatrice en PHP](#calculator)

### Variables

#### Exercice 1

1. Créer trois variables `nom`, `prenom` et `age` et les initialiser avec les valeurs de votre choix.
2. Attention `age` est de type entier.
3. Afficher leur contenu de sorte qu'on puisse lire sur le navigateur "Bonjour `prenom`, enfant de la famille `nom` ayant atteint de level `age` !". 

#### Exercice 2

1. Créer une variable `km`. L'initialiser à 1. Afficher son contenu.
2. Changer sa valeur par 3. Afficher son contenu.
3. Changer sa valeur par 125. Afficher son contenu.

#### Exercice 3

1. Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
2. Les afficher.

#### Exercice 4

1. Créer une variable de type int.
2. L'initialiser avec rien.
3. Afficher sa valeur.
4. Donner une valeur à cette variable et l'afficher.

#### Exercice 5

1. Créer 3 variables.
2. Dans la première mettre le résultat de l'opération 3 + 4.
3. Dans la deuxième mettre le résultat de l'opération 5 * 20.
4. Dans la troisième mettre le résultat de l'opération 45 / 5.
5. Afficher le contenu des variables.

#### Exercice 6

1. C'est les soldes. Un t-shirt qui te plaît coûte 785€ à la base mais ce mois-ci, ton magasin préféré lui applique une ristourne de 30%. Grâce à tes nouvelles connaissances en PHP, affiche le prix de départ, le montant de la ristourne et le prix que tu vas payer sur ton navigateur.

### Conditions

#### Exercice 1

Créer une variable `age` et l'initialiser avec une valeur.  
Si l'âge est supérieur ou égale à 18, afficher **Vous êtes majeur**.
Dans le cas contraire, afficher **Vous êtes mineur**.

#### Exercice 2

Créer une variable `IsEasy` de type booléan et l'initialiser avec une valeur.  

Afficher **C'est facile!!** si c'est vrai. Dans le cas contraire afficher **C'est difficile !!!**.  

**Bonus :** L'écrire de deux manières différentes.

#### Exercice 3

Créer deux variables `age` et `genre`. La variable `genre` peut prendre comme valeur :

- Homme
- Femme  

En fonction de l'âge et du genre, afficher la phrase correspondante :

- Vous êtes un homme et vous êtes majeur
- Vous êtes un homme et vous êtes mineur
- Vous êtes une femme et vous êtes majeur
- Vous êtes une femme et vous êtes mineur

Gérer tous les cas.

#### Exercice 4

L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.  

Créer une variable `magnitude`. Selon la valeur de `magnitude`, afficher la phrase correspondante.
Indice : *Utiliser autre chose que des if else, comme par exemple, un switch*

Magnitude   |   Phrase
------      |   ------
1           |   Micro-séisme impossible à ressentir.
2           |   Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
3           |   Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
4           |   Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
5           |   Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
6           |   Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.
7           |   Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
8           |   Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
9           |   Séisme capable de tout détruire sur une très vaste zone.

Gérer tous les cas.  

#### Exercice 5

Traduire ce code avec des if et des else :  

    <?php
      echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    ?>

#### Exercice 6

Traduire ce code avec des if et des else :  

    <?php
      echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    ?>

#### Exercice 7

Traduire ce code avec des if et des else :  

    <?php
      echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    ?>

#### Exercice 8

Traduire ce code avec des if et des else :  

    <?php
      echo ($maVariable) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
    ?>
