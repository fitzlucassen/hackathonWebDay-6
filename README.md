# hackathonWebDay-6
Problème
--------
Princess Peach est piégé dans un des quatre coins d'une grille carrée. Vous êtes dans cette grille et vous pouvez vous déplacer d'une étape à la fois dans l'une des quatre directions. Pourrez-vous sauver la princesse?

Format de l’entré
-----------------
La grille contient un nombre entier impair N (3 <= N <52) de ligne et de colonne. Chaque cellule est désignée par '-' (valeur ASCII: 45). Votre position est désignée par ‘m’ et la position de la princesse est désignée par ‘p’.

Format de la sortie
-------------------
Imprimez les mouvements que vous allez prendre pour sauver la princesse en une seule fois. Les mouvements doivent être séparés par "\n" (un saut de ligne). Les mouvements valides sont : LEFT, RIGHT, UP ou DOWN.

Exemple de grille
---------------
```
---
-m-
p--
```

Exemple de sortie
-----------------
```
DOWN
LEFT
```

Tâche
-----
Remplissez la fonction displayPathToPrincess qui prend en deux paramètres - l'entier N et la grille de tableau de caractères. La grille sera formatée exactement comme vous le voyez dans l'entrée, donc pour l'entrée de l'échantillon la princesse est à grille[2][0]. 
La fonction doit imprimer les mouvements (LEFT, RIGHT, UP ou DOWN) sur des lignes consécutives pour sauver / rejoindre la princesse. L'objectif est d'atteindre la princesse dans le moins de coups possible.

L'entrée de l'échantillon ci-dessus est juste pour vous aider à comprendre le format. La princesse (‘p’) peut être dans n’importe quel coin

Note 
----
Votre score est calculé comme suit: (10 - nombre de déplacements effectués en trop pour sauver la princesse).
