# WordPress-Portfoli

<h1>comment installer WordPress manuellement sur son serveur</h1>
Il est recommandé d’installer manuellement WordPress sur son serveur, au lieu de passer par une installation automatique proposée par les services d’hébergement, pour plusieurs raisons :
la maîtrise de la configuration de votre site,
un plus grand nombre d’options de personnalisation,
la dernière version à jour de WordPress sera utilisée.
Il est en effet primordial d’avoir un site à jour avec la dernière version de WordPress pour des raisons de sécurité. Si vous préférez installer WordPress automatiquement, sans passer par les étapes techniques que nous vous détaillons ci-dessous, il est possible d’utiliser les modules de gestion de contenu pré-installés proposés par certains hébergeurs comme OVH.
<h2>Télécharger WordPress</h2>
Tout d’abord, téléchargez le dossier WordPress sur votre ordinateur et ouvrez le dossier compressé pour accéder à l’ensemble des fichiers PHP.
<h2>Créer une base de données MySQL pour WordPress</h2>
Ensuite, vous devez créer une base de données pour WordPress, qui contient toutes les informations de votre site (les contenus, les modes de réglage, les noms des utilisateurs…) sur votre serveur. Pour cela, connectez-vous sur le site de votre hébergeur et rendez-vous dans la rubrique dédiée aux bases de données. Cliquez sur le bouton Créer une base de données et suivez le guide.
Le nom d’utilisateur, que vous avez reçu par email, vous sera demandé ainsi que la création d’un mot de passe complexe pour sécuriser la base de données de votre site.
<h2>Envoyer les fichiers WordPress sur son serveur </h2>
Vous devez avoir installé au préalable un gestionnaire de fichiers, ou client FTP (File Transfer Protocol), sur votre ordinateur. Le plus populaire et simple d’utilisation est sûrement FileZilla (Windows, Mac, Linux).

Une fois lancé, vous devez configurer le client FTP, pour qu’il puisse se connecter à votre serveur, en renseignant les informations suivantes : le nom d’hôte, l’identifiant (ou le login FTP), le mot de passe et le port. Ces différents éléments vous sont envoyés par votre service d’hébergement lors de la souscription de votre offre.

Dans Filezilla, ouvrez le dossier wordpress depuis votre ordinateur (partie gauche du client FTP) et sélectionnez l’intégralité des fichiers présents à l’intérieur. Celui-ci contient les dossiers wp-admin, wp-content, wp-includes et une quinzaine de fichiers PHP. Il est préférable de transférer uniquement les fichiers du dossier WordPress et non le dossier lui-même, pour éviter que votre site n’apparaisse sur monsite.com/wordpress.

Glissez-déposez votre sélection sur votre site, dans le répertoire de votre choix (dans la partie droite de Filezilla) :

<h3>soit dans le dossier situé à la racine du répertoire:</h3> en fonction des hébergeurs, il peut s’agir de public_html (chez O2switch), www (chez OVH) ou htdocs chez d’autres hébergeurs,
<h3>soit dans un sous-répertoire:</h3>, si vous souhaitez qu’il apparaisse sur un sous-domaine de votre site (ex : monsite.com/blog).
Vous pouvez aussi sélectionner les fichiers situés sur votre ordinateur (site local), faire un clic-droit et sélectionner Envoyer.
’opération va prendre quelques minutes et vous pouvez suivre sa progression sur la barre située en bas de l’interface, en visualisant le nombre de fichiers transférés
<h2>Terminer l’installation du site WordPress </h2>
Vos fichiers WordPress étant désormais présents sur votre serveur, vous devez faire le lien avec la base de données que vous venez de créer. Pour cela, ouvrez votre navigateur et lancez le script d’installation de WordPress en tapant :

si votre site est installé à la racine de WordPress : monsite.com/wp-admin/install.php
si votre site est installé dans le sous-répertoire blog : monsite.com/blog/wp-admin/install.php
Une fenêtre WordPress va s’afficher avec la marche à suivre en vue de créer le fichier de configuration : wp_config.php. Pour le remplir, vous aurez besoin des informations de la base de données fournies par votre hébergeur : son nom, le nom d’utilisateur MySQL, le mot de passe de l’utilisateur, l’hôte de base de données et le préfixe de table (dans le cas où vous devez gérer plusieurs sites WordPress sur une même base de données). Cliquez sur le bouton C’est parti ! situé en bas de l’encart pour remplir ces informations.

Pour terminer l’installation manuelle de WordPress pour votre site, cliquez sur le bouton : Lancer l’installation.

Un nouveau formulaire vous sera soumis. Vous devrez renseigner :

<h3>le titre de votre site :</h3> il apparaîtra sur les pages de votre site et vous pourrez le modifier à tout moment,
</h3>votre identifiant :</h3> il est recommandé de ne pas le nommer « admin » pour des raisons de sécurité,
<h3>un mot de passe complexe</h3>
<h3>une adresse de messagerie :</h3> elle sera l’adresse mail principale pour l’administration de votre site et vous pourrez la modifier dans les réglages généraux du back-office si besoin.
Ne cochez pas la case Demander aux moteurs de recherche de ne pas indexer ce site si vous souhaitez que celui-ci apparaisse dans les résultats des moteurs comme Google ou Bing. En revanche, vous pouvez cocher cette case le temps de configurer votre site. Vous pourrez la décocher après dans les options de votre site WordPress.
Vous recevrez par email les informations de connexion à votre site. Lorsque tous ces champs sont remplis, cliquez sur : Installer WordPress.



