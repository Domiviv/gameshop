# gameshop
Site de vente de jeu vidéo dans le cadre du cours de Projet de Dévellopement
WEB de 2ème Informatique de Gestion à l'IPAM La Louvière

Par : NECHELPUT Vivien

Prérequis
--------------------------------
- XAMPP
- PHP 7.2.2

Installation:
--------------------------------
- Clone or download
- Download ZIP
- Extraire le dossier
- Renommer le dossier en "gameshop"
- Lancer XAMPP et lancer les serveurs "Apache" et "MySQL"
- Ouvrir le fichier : "C:\Windows\System32\drivers\etc\hosts"
- Rajouter la ligne : "127.0.0.1 gameshop.local" (sans les guillemets)
- Enregistrer
- Aller sur cet emplacement : "C:\xampp\apache\conf\extra"
- Créer un fichier : "gameshop.conf" et y copier les lignes suivantes
    #####
    ## gameshop.local
    ## DOMAINE de gameshop
    #####
    NameVirtualHost gameshop.local

    <Directory "D:\EXEMPLE CHEMIN VERS\gameshop">
    AllowOverride All
    Options Indexes MultiViews FollowSymLinks
    Require all granted
    </Directory>

    <VirtualHost gameshop.local>
    DocumentRoot "D:\EXEMPLE CHEMIN VERS\gameshop"
    ServerName gameshop.local
    </VirtualHost>

    /!\ PRENDRE SOIN DE REMPLACER "D:\EXEMPLE CHEMIN VERS\gameshop" par le chemin menant vers le dossier du projet /!\

- Aller sur cet emplacement : "C:\xampp\apache\conf"
- Modifier le fichier "httpd.conf"
- Rechercher dans le fichier (CTRL+F) ceci : "include conf"
- Rajouter au-dessus les 2 lignes suivantes :
    # gameshop.conf
    Include conf/extra/gameshop.conf
- Redémarrer la machine pour être sur de l'application des modifications
- Aller sur un navigateur et lancer la page : "http://localhost/phpmyadmin/"
- Cliquer sur "Nouvelle base de données", dans le menu sur la gauche
- Entrer dans le champ "Nom de base de données" : "gameshop" et cliquer sur "Créer"
- Cliquer maintenant sur "gameshop" qui vient d'apparaître dans le menu de gauche
- Cliquer sur l'onglet "Importer"
- Sur la nouvelle page, cliquer sur "Choisir un fichier"
- Prendre le dump "gameshop.sql" présent à la racine du dossier gameshop
- Ensuite, cliquer sur "Exécuter"
- Taper l'url suivante : "http://gameshop.local"
- Fini !!!
