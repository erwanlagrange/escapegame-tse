SourceCodeV2

Docs - SourceCode


I / Le but du jeu

II / Installation

III / Modifier les données.




I / Le jeu

Le jeu du jeu du code source consiste en la récupération de 5 morceaux de codes.
Ces morceaux de codes seront cachés ( sous forme de papier ? )

Les joueurs doivent retrouver ces codes et les renseigner dans le bon ordre dans l’application.

Si tous les champs sont biens renseignés : L’écran de succès apparaît, et donne accès à la suite du jeu.

Si tous les champs ne sont pas bien renseignés : un bouton apparaît qui affichera au clic une petite modale contenant un message d’erreur aléatoire amusant. Et un code couleur apparait au niveau des champs :

Vert : le champs est bien renseigné.
Orange : La réponse existe mais n’est pas placée au bonne endroit.
Rouge : La réponse renseignée n’existe pas.


II / L’installation

L’installation consiste à déployer le l’application créée sous Laravel sur un serveur.

Le serveur devra disposer d’une installation de PHP à jour et de Composer
 https://getcomposer.org/

Aucune migration de base de données n’est nécessaire car celles ci sont stockées dans des fichiers au format JSON.





III / Modifier les données

Pour modifier les 5 morceaux de codes que les joueurs doivent trouvés :

sourcecode/app/Http/Controllers/data.json -> Modifier la valeurs souhaiter.

Les autres fichiers JSON présent sont autonomes et ne nécessites pas de modifications.


Pour les informations en “durs”  les vues se situent dans :

/sourcecode/resources/views :

Les fichiers pouvant être modifier sont :

- Index
- indexEchec1
- indexEchec2
- Success
- Template

Ces fichiers comportent les technologies Bootstrap et Blade de Laravel

Le fichier CSS permettant de modifier le style des pages se trouve dans :

/sourcecode/public/css/main.css
