### Projet web 2ème année cours du soir IPAM - La Louvière 

Projet réalisé en PHP - MVC, utilisation d'un google chart en javascript pour renvoyer des statistique sur le site.

Thème : "boutique de manga et goodies japonnais"




### Installation 

Pré-requis : Xamp
<br>
Ajouter fichier 'projetweb.conf' dans le folder : C:\xampp\apache\conf
<br>
Modifier fichier httpd.conf dans la section "Secure (SSL/TLS) connections" et rajouter : 
<br>
  #Include conf/extra/httpd-ssl.conf
<br>
  #Include conf/extra/projetweb.conf
<br>
Editer fichier host dans C:\Windows\System32\drivers\etc et ajouter : 127.0.0.1 projetweb.test
<br>
éditer fichier : http-vshosts.conf
ajouter à la fin (en adaptant le path où se trouvent les sources du projet): 

<Directory "C:\Users\Thibault\source\repos\projetweb"><br>
    AllowOverride All<br>
    Options Indexes MultiViews FollowSymLinks<br>
    Require all granted<br>
<\/Directory>

<VirtualHost *:80><br>
    DocumentRoot C:\Users\Thibault\source\repos\projetweb<br>
    ServerName projetweb.test<br>
<\/VirtualHost>
<br>

### utilisation du site : 
- création d'un user admin via la db ou enregistrer un nouvel utilisateur et lui set le role admin en db.
- utiliser les credentials du user admin dans la classe Database pour le pdo.
- interface différente si user/admin/anonyme. 
<br>-> user : panier, commandes personnelles,account, listing mangas et détail d'un manga
<br>-> anonymous : signup/login, listing manga et détail d'un manga
<br>-> admin : listing mangas avec option (add,delete,edit), détail manga avec option(delete/edit), listing de toutes les commandes passées, statistiques de ventes par titre, gestion des utilisateurs.
<br>Url "home" : http://projetweb.test/ProjetECommerce/
