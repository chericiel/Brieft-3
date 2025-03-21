# Brieft-3
Brieft_3– Gestion des Utilisateurs (MVC, PHP, MySQL)
Mon Projet est une application web sécurisée destinée aux PME, permettant de centraliser et de gérer les comptes utilisateurs via une architecture MVC personnalisée. L’application distingue deux profils principaux : Administrateur et Client.

Table des Matières :<br>
Contexte<br>
Objectifs<br>
Fonctionnalités<br>
Technologies utilisées<br>
Structure du Projet<br>
Installation et Déploiement<br>
Utilisation<br>
Sécurité<br>
Contributions<br>
Licence<br>
Contact<br>
Contexte<br>

Dans le cadre du développement d'une solution digitale pour PME, ce projet vise à sécuriser et centraliser la gestion des clients. L’application permet aux administrateurs de gérer les comptes clients (ajout, modification, suppression, activation/désactivation) ainsi que d’accéder aux logs de connexion, tandis que les clients peuvent consulter et modifier leurs informations personnelles et consulter l’historique de leurs connexions.

Objectifs :
Concevoir et développer une application web en PHP utilisant l’architecture MVC.
Implémenter un système d’authentification sécurisé (inscription, connexion, déconnexion) avec hashage des mots de passe (bcrypt).
Gérer les utilisateurs et les rôles (administrateur et client) avec des droits d’accès spécifiques.
Enregistrer l’historique des connexions via une table sessions dans la base de données MySQL.
Fournir des dashboards dynamiques : un pour l’administrateur et un pour le client.
Fonctionnalités

Pour l’Administrateur :
Tableau de bord affichant :
Statistiques (nombre d’utilisateurs, nombre d’articles, logs de connexion, etc.)
Liste des utilisateurs avec options de création, modification, suppression, activation/désactivation.
Consultation des logs de connexion.
Gestion des rôles et des droits d’accès.

Pour le Client :
Inscription et connexion sécurisée.
Espace personnel permettant de :
Consulter et modifier son profil.
Consulter l’historique de ses connexions.

Technologies utilisées
Backend : PHP (programmation orientée objet)
Architecture : MVC personnalisée
Base de données : MySQL (connexion via PDO)
Frontend : HTML5, CSS3 (utilisation de Tailwind CSS recommandée), JavaScript (pour le menu responsive)
Sécurité : Validation des entrées, utilisation de requêtes préparées, hashage des mots de passe (bcrypt), protection contre les attaques (XSS, CSRF)

Brieft_3
Structure du Projet/
│   └── database.php         # Connexion MySQL via PDO
├── controllers/
│   ├── AuthController.php   # Gestion de l'authentification (login, inscription, logout)
│   └── DashboardController.php  # Affichage des dashboards (admin et client)
├── models/
│   ├── User.php             # Modèle utilisateur (CRUD, récupération d'utilisateur)
│   ├── Role.php             # Modèle pour la gestion des rôles
│   └── Session.php          # Modèle pour l'historique des connexions
├── views/
│   ├── auth/
│   │   ├── login.php        # Formulaire de connexion
│   │   └── register.php     # Formulaire d'inscription
│   ├── dashboard/
│   │   ├── dashboardAdmin.php   # Dashboard pour l'administrateur
│   │   └── dashboardClient.php  # Dashboard pour le client
│   ├── includes/
│   │   ├── header.php       # En-tête commun (logo, navigation)
│   │   ├── sidebarAdmin.php # Menu latéral pour l'administrateur
│   │   ├── sidebarClient.php# Menu latéral pour le client
│   │   └── footer.php       # Pied de page commun
├── public/
│   ├── css/
│   │   └── style.css        # Feuille de style (Tailwind CSS ou personnalisée)
│   ├── js/
│   │   └── script.js        # Scripts JavaScript (ex : menu responsive)
│   └── index.php            # Point d'entrée public (peut rediriger vers un contrôleur)
├── .gitignore               # Fichiers/dossiers à exclure de Git (ex : config local, fichiers temporaires)
├── README.md                # Documentation du projet (ce fichier)
└── LICENSE                  # Licence du projet (si applicable)

Description des fichiers clés :
config/database.php : Configure la connexion à MySQL via PDO.
controllers/AuthController.php : Gère l'inscription, la connexion et la déconnexion.
controllers/DashboardController.php : Redirige l'utilisateur vers le dashboard approprié selon son rôle.
models/User.php : Contient les méthodes pour interagir avec la table users (récupération, insertion, mise à jour, suppression).
views/auth/login.php & register.php : Vues pour les formulaires d'authentification.
views/dashboard/dashboardAdmin.php & dashboardClient.php : Interfaces spécifiques pour l’administrateur et le client.
views/includes/header.php, sidebarAdmin.php, sidebarClient.php, footer.php : Composants communs de l’interface.
public/css/style.css & public/js/script.js : Fichiers pour le style et les interactions dynamiques.
Installation et Déploiement
Prérequis
Serveur Web (Apache, Nginx)
PHP 7+ (avec PDO)
MySQL
Git
Étapes d'installation
Cloner le dépôt Git :

bash
Copier
Modifier
git clone https://github.com/ton-utilisateur/mon_projet.git
cd mon_projet
Configurer la base de données :

Crée une base de données nommée mon_projet dans MySQL.
Exécute le script SQL fourni (dans la documentation ou via phpMyAdmin) pour créer les tables roles, users et sessions.
Modifie le fichier config/database.php avec tes identifiants MySQL.
Configurer le serveur :

Place le projet dans le répertoire racine de ton serveur web (ex : htdocs pour XAMPP).
Démarre ton serveur web et MySQL.
Accède à l'application via http://localhost/mon_projet/public/index.php.
Installation des dépendances (optionnel) :

Si tu utilises un gestionnaire de paquets (composer, npm pour Tailwind CSS, etc.), installe-les selon les instructions du README.
Utilisation
Accès à l'authentification :
Rendez-vous sur la page de connexion (ex : index.php?action=login).
Les utilisateurs pourront s'inscrire via le formulaire d'inscription et se connecter ensuite.

Dashboard Administrateur :
Après connexion, si l'utilisateur est un administrateur, il sera redirigé vers le dashboard admin, où il pourra gérer les comptes clients, consulter les statistiques et les logs de connexion.

Dashboard Client :
Un client connecté verra son propre dashboard, affichant ses informations personnelles et son historique de connexion.

Sécurité
Hashage des mots de passe :
Utilisation de password_hash() pour stocker les mots de passe de manière sécurisée.
Requêtes préparées :
Toutes les interactions avec la base de données utilisent PDO avec des requêtes préparées pour prévenir les injections SQL.
Gestion des sessions :
L’authentification repose sur la gestion des sessions en PHP.
Validation des entrées :
Le code doit inclure une validation côté serveur et côté client pour protéger contre les attaques XSS et CSRF.
Contributions
Les contributions sont les bienvenues !

Fork ce dépôt.
Crée ta branche de fonctionnalité (git checkout -b feature/ma-fonctionnalite).
Commit tes changements (git commit -m 'Ajout de ma fonctionnalité').
Push sur ta branche (git push origin feature/ma-fonctionnalite).
Ouvre une Pull Request.
Licence
Ce projet est sous licence [Nom de la Licence] – voir le fichier LICENSE pour plus d'informations.

Contact
Pour toute question ou suggestion, veuillez me contacter à :

Email : emmanueldylan237@gmail.com
GitHub : Chericiel
