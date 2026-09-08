# 🍽️ Vite & Gourmand

> Application web de gestion d'un service de traiteur développée avec Symfony.

---

# 📑 Table des matières

- [À propos](#-à-propos)
- [État d'avancement](#-état-davancement)
- [Présentation fonctionnelle](#-présentation-fonctionnelle)
- [Stack technique](#-stack-technique)
- [Architecture de développement](#-architecture-de-développement)
- [Prérequis](#-prérequis)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Services disponibles](#-services-disponibles)
- [Structure du projet](#-structure-du-projet)
- [Commandes utiles](#-commandes-utiles)
- [Conventions de développement](#-conventions-de-développement)
- [Documentation](#-documentation)
- [Auteur](#-auteur)
- [Licence](#-licence)

---

# 📖 À propos

**Vite & Gourmand** est une application web développée avec **Symfony** pour répondre au besoin d'une entreprise de traiteur souhaitant moderniser sa présence en ligne.

L'application permettra aux visiteurs de découvrir les menus proposés par l'entreprise, de créer un compte, de passer commande et de suivre leurs prestations. Elle intégrera également des espaces dédiés aux employés et aux administrateurs afin de gérer les menus, les commandes, les avis clients et les utilisateurs.

Ce projet est réalisé dans le cadre de la formation **Graduate Développeur Web et Web Mobile (DWWM)** et suit une démarche de développement professionnelle basée sur l'analyse des besoins, la conception, le développement, les tests et la documentation.

---

# 🚧 État d'avancement

## Réalisé

- ✅ Analyse du cahier des charges
- ✅ Gestion de projet (Trello)
- ✅ Wireframes
- ✅ Maquettes graphiques
- ✅ Modélisation de la base de données
- ✅ Initialisation du projet Symfony
- ✅ Mise en place de l'environnement Docker

## En cours

- 🚧 Initialisation du dépôt Git

## À venir

- ⏳ Intégration d'une base de données NoSQL (MongoDB)
- ⏳ Authentification
- ⏳ Gestion des menus
- ⏳ Gestion des commandes
- ⏳ Espaces Utilisateur / Employé / Administrateur
- ⏳ Déploiement

---

# 🍴 Présentation fonctionnelle

À terme, l'application permettra notamment de :

- consulter les menus proposés par le traiteur ;
- rechercher un menu grâce à différents filtres ;
- créer un compte utilisateur ;
- passer une commande en ligne ;
- suivre l'état d'avancement d'une commande ;
- laisser un avis après une prestation ;
- administrer les menus et les commandes depuis un espace sécurisé.

Cette liste évoluera au fur et à mesure du développement.

---

# 🛠 Stack technique

| Technologie | Rôle |
|-------------|------|
| Symfony 8 | Framework PHP |
| PHP 8.5 | Langage |
| MySQL 8.4 | Base de données relationnelle |
| MongoDB 8.0 | Base de données non relationnelle (NoSQL) |
| Apache 2.4 | Serveur HTTP |
| Docker & Docker Compose | Environnement de développement |
| phpMyAdmin | Administration MySQL |
| Mailpit | Serveur SMTP de développement |
| Git | Gestion des versions |
| GitHub | Hébergement du code |


---

# 🏗 Architecture de développement

Le projet est entièrement conteneurisé afin de garantir un environnement identique pour tous les développeurs.

```
                 Docker Compose
                        │
      ┌─────────────────┼──────────────────┐
      │                 │                  │
   Apache            MySQL             Mailpit
      │
      ▼
PHP 8.5 + Symfony
      │
      ▼
 Application
```

> **Evolution prévue :**
> Conformément au cahier des charges, une base de données NoSQL (MongoDB) sera intégrée au projet afin de répondre aux besoins statistiques de l'espace administrateur.
---

# 📋 Prérequis

Les logiciels suivants doivent être installés :

- Git
- Docker Desktop

Aucune installation locale de PHP, Apache ou MySQL n'est nécessaire.

---

# 🚀 Installation

## 1. Cloner le dépôt

```bash
git clone <URL_DU_DEPOT>
cd vite-gourmand
```

## 2. Créer les fichiers locaux

Créer les fichiers suivants :

```
.env.local
.env.docker.local
```

Ces fichiers contiennent les paramètres propres à votre environnement de développement et ne sont pas versionnés.

## 3. Configurer les variables Docker

Compléter les variables présentes dans :

```
.env.docker.local
```

avec vos propres informations (identifiants MySQL, mots de passe...).

## 4. Lancer le projet

```bash
docker compose up --build
```

---

# ⚙️ Configuration

| Fichier | Versionné | Description |
|----------|:---------:|-------------|
| `.env` | ✅ | Configuration Symfony commune |
| `.env.local` | ❌ | Configuration locale Symfony |
| `.env.docker` | ✅ | Configuration Docker commune |
| `.env.docker.local` | ❌ | Configuration Docker locale |

Les fichiers `*.local` contiennent les informations spécifiques à chaque développeur et ne doivent jamais être versionnés.

---

# 🌐 Services disponibles

Une fois les conteneurs démarrés :

| Service | URL |
|----------|-----|
| Application Symfony | http://localhost:8080 |
| phpMyAdmin | http://localhost:8081 |
| Mailpit | http://localhost:8025 |

---

# 📁 Structure du projet

```
docker/            Configuration Docker
config/            Configuration Symfony
public/            Point d'entrée de l'application
src/               Code source
templates/         Templates Twig
migrations/        Migrations Doctrine
assets/            Ressources front-end
tests/             Tests automatisés
```

---

# 🧰 Commandes utiles

```bash
docker compose up --build
```

Construire et démarrer les conteneurs.

```bash
docker compose down
```

Arrêter les conteneurs.

```bash
docker compose down -v
```

Supprimer les conteneurs et les volumes.

```bash
docker compose config
```

Afficher la configuration Docker résolue.

```bash
docker compose exec php bash
```

Accéder au conteneur PHP.

---

# 📏 Conventions de développement

Le projet suit les conventions suivantes :

- une fonctionnalité correspond à un ticket Trello ;
- un ticket terminé donne lieu à un commit Git ;
- le README est mis à jour lorsque l'installation, la configuration ou les fonctionnalités évoluent ;
- les fichiers contenant des données sensibles ne sont jamais versionnés.

---

# 📚 Documentation

La documentation technique sera enrichie progressivement au cours du développement.

Elle regroupera notamment :

- le modèle conceptuel de données (MCD) ;
- les diagrammes UML (cas d'utilisation et séquences) ;
- les maquettes ;
- les décisions techniques ;
- la documentation de déploiement.

---

# 👤 Auteur

Mohamed

Projet réalisé dans le cadre de la formation **Graduate Développeur Web et Web Mobile (DWWM)**.

---

# 📄 Licence

Aucune licence n'est définie pour le moment.