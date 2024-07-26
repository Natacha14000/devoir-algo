<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

/*Le générateur de recettes
Objectif : Créer un script PHP qui génère une recette aléatoire à partir d'ingrédients donnés,
tout en demandant à l'utilisateur de choisir un ingrédient supplémentaire.
Étapes :
1. Préparation des données :
o Créez un tableau contenant une liste d'ingrédients avec leurs quantités.
o Créez un tableau d'actions de cuisine (comme "Coupez", "Mélangez", "Faites
revenir", etc.).
2. Demander à l’utilisateur :
o Demandez à l'utilisateur de saisir un ingrédient supplémentaire.
3. Génération de la recette :
o Initialisez une variable pour stocker le texte de la recette.
o Ajoutez un titre à votre recette.
4. Traitement des ingrédients :
o Utilisez une boucle pour parcourir le tableau d'ingrédients.
o Pour chaque ingrédient :
§ Choisissez une action aléatoire du tableau d'actions.
§ Ajoutez une ligne à la recette combinant l'action et l'ingrédient.
§ Si l'ingrédient est "oignons", ajoutez une note humoristique.
5. Finalisation de la recette :
o Ajoutez une étape finale à la recette (par exemple, "Servir chaud et déguster !").
o Faites en sorte d’afficher la recette générée*/

/*Demander à l'utilisateur*/
$IngredientSup = readline("Ajouter un ingrédient\n");

/*Préparation des données*/
$tabIngredient = ["2 oeuf", "500 grm de farine", "2 cs de sucre", "un saucisson", "une salade", "oignons"];
$tabAction = ["Coupez", "Mélanger", "Faites revenir", "Blanchir", "Cuire", "Enfourner"];

/*Génération de la recette*/
$TexteRecette = array ("");
echo "Délicieuse recette personnalisée\n";

/*Traitement des ingrédients*/

$longueurTab = count($tabIngredient);

// Utilisation d'une boucle for pour parcourir le tableau
for ($i = 0; $i < $longueurTab; $i++) {
    $Ingredient = $tabIngredient[$i];
}

$longueurTabAction = count($tabAction);

for ($a = 0; $a < $longueurTabAction; rand(0,5)) {
    $Action = $tabAction[$a];
}

echo $Action . $Ingredient . "\n";
echo "Servir chaud et deguster !";
?> 
    
</body>
</html>