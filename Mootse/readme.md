Fausse application Mootse pour l'escape game de Télécom Saint-Étienne.
Pierre Jarriges, Manel Khoucha
Mars 2019

INSTALLATION

DATABASE
Le dossier database contient le fichier d'import de la base de donnée.
Il faut donc en premier lieu importer la base de donnée avec Phpmyadmin ou autre, sur le serveur ou sera hébergée l'application.

BACKEND
Le dossier backend contient l'application en PHP qui communique avec la base de données. Cette application renvoie une API en json qui sera récupéré coté front avec du JS/AJAX.
Pour installer l'API, il faut commencer par éxécuter composer dans le dossier backend :
user@ordi:/var/www/html/.../tse-escape-bibli/backend$ php composer.phar install

Ensuite il faudra penser à régler la configuration de la connexion à la base de donnée dans le fichier /src/domain/PdoConfig.php et remplacer les infos par les vôtres (dbname, user, password);

FRONTEND
le dossier frontend contient simplement un index.html contenant tout les éléments de la vue, et le script JS s'occupe du reste.
Il faut commencer par se placer dans le dossier frontend puis lancer un "npm install".

Ensuite il faudra modifier l'adresse où sont faîtes les requetes ajax pour bien les diriger vers là où vous aurez installé l'api. Donc dans index.js il faut modifier cette ligne (dans la fonction logUser() ) :

"axios.get("http://i/public/index.php?login="+login+ "&password="+password)" 
et remplacer   "51.75.126.56/workshop_TSE_bibli/"    par le chemin de là ou vous avez installé le dossier backend.


Attention, le fichier JS utilisé par index.html est bundle.js, il ne faut pas toucher ce fichier, s'il y a des modifs à faire dans le javascript il faut les faire au niveau de index.js puis ne pas oublier de transpiler avec browserify vers bundle.js.

Quand tout est fait il faut bien vérifier que l'ensemble du dossier (backend et frontend) appartiennent bien au groupe www-data.
Si ce n'est pas le cas il faudra faire un "sudo chgrp -R www-data tse-escape-bibli" sur le dossier.51.75.126.56/workshop_TSE_bibli

Une fois que tout ceci est en place l'application est prête à l'usage, le point d'entrée sera l'index.html du dossier frontend.
À vous de jouer !
N'hésitez pas à nous contacter en cas de problème.
