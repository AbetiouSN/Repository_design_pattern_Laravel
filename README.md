# Repository_design_pattern_Laravel

# Laravel Repository Pattern![image](https://github.com/AbetiouSN/Repository_design_pattern_Laravel/assets/89549277/080af51e-49be-43b8-a731-3b3501872e97)

![image](https://github.com/AbetiouSN/Repository_design_pattern_Laravel/assets/89549277/52c55ec3-0ef6-4c3f-a5d0-91974345e5e6)

* Les requêtes HTTP sont reçues par le contrôleur (Controller), qui les dirige vers les méthodes appropriées.
* Le contrôleur utilise les services (Service) pour gérer la logique métier associée aux produits.* Les services interagissent avec les repositories pour accéder aux données des produits.
* Les repositories utilisent les modèles (Models) pour interagir avec la base de données et effectuer les opérations CRUD.
* Les données sont renvoyées par les modèles aux repositories, puis aux services, et finalement au contrôleur.* Le contrôleur peut ensuite utiliser les vues pour formater les données et les présenter à l'utilisateur final via une réponse HTTP appropriée.
![image](https://github.com/AbetiouSN/Repository_design_pattern_Laravel/assets/89549277/af6c894d-2d4a-4d4a-b30d-13958dbfbbc9)

# Le Model (Product) :
Le Model représente la structure des données dans votre application, en l'occurrence, les produits.
Il encapsule la logique des données et fournit des méthodes pour interagir avec la base de données.

# Le Repository (ProductRepository) :
Le Repository agit comme une couche d'abstraction entre le Model et le Service.
Il fournit des méthodes pour effectuer des opérations de lecture et d'écriture sur les données des produits.
Le Repository utilise directement le Model pour interagir avec la base de données.

# Le Service (ProductService) :
Le Service agit comme une couche intermédiaire entre le contrôleur et le Repository.
Il contient la logique métier de haut niveau liée aux produits.
Le Service utilise les méthodes du Repository pour manipuler les données des produits, en orchestration avec la logique métier. 

# Le Controller (ProductController) :
Le Controller gère les requêtes HTTP entrantes et les réponses associées.
Il utilise le Service pour exécuter les opérations métier relatives aux produits.
Il est responsable de recevoir les demandes du client, de valider les données si nécessaire, et de retourner les réponses appropriées.
![image](https://github.com/AbetiouSN/Repository_design_pattern_Laravel/assets/89549277/d4e7f348-f043-4472-82ba-c508da7fe632)
