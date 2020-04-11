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
</Directory><br>

<VirtualHost *:80><br>
    DocumentRoot C:\Users\Thibault\source\repos\projetweb<br>
    ServerName projetweb.test<br>
</VirtualHost><br>

<br>
Url "home" : http://projetweb.test/ProjetECommerce/
