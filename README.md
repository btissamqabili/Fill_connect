# FillConnect

Application web de gestion d'une salle de sport développée en PHP orienté objet en utilisant l'architecture MVC.

---

## Fonctionnalités

### Gestion des salles
- Ajouter une salle
- Modifier une salle
- Supprimer une salle
- Consulter une salle

### Gestion des adhérents
- Ajouter un adhérent
- Modifier un adhérent
- Supprimer un adhérent
- Consulter un adhérent

### Gestion des abonnements
- Ajouter un abonnement
- Modifier un abonnement
- Supprimer un abonnement
- Consulter un abonnement

### Gestion des séances
- Ajouter une séance
- Modifier une séance
- Supprimer une séance
- Consulter une séance

### Dashboard
- Affichage du nombre total des salles
- Affichage du nombre total des adhérents
- Affichage du nombre total des abonnements
- Affichage du nombre total des séances

---

## Technologies utilisées

- PHP 8
- MySQL
- HTML5
- CSS3
- PDO
- Architecture MVC

---

## Structure du projet

```text
app/
│
├── Controllers/
├── Entities/
├── Repositories/
└── Services/

config/
public/
│
└── css/

views/
├── abonnements/
├── adherents/
├── dashboard/
├── errors/
├── layouts/
├── salles/
└── seances/

fitconnect.sql
README.md
```

---

## Base de données

Le projet utilise une base de données MySQL nommée **fitconnect** contenant les tables suivantes :

- salle
- adherent
- abonnement
- seance

---

## Architecture utilisée

Le projet suit le modèle **MVC (Model - View - Controller)** :

- **Model** : Entities, Repositories et Services.
- **View** : les pages d'affichage situées dans le dossier `views`.
- **Controller** : gère les interactions entre les vues et les données.

---

## Auteur

Projet réalisé dans le cadre d'un projet de gestion d'une salle de sport.

**Réalisé par : Btissam Qabili**