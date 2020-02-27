# 3wAcademy-gestion--salaire

Exercice
On souhaite développer une application de gestion des salaires des employés
d’une entreprise. On suppose qu’un employé est caractérisé par son nom, son
prénom et son âge. Il peut être soit un vendeur, un représentant ou un technicien.
chaque classe implémente la méthode calculerSalaire() qui retourne le salaire
d’un employé.
Le calcul des salaires des employés est comme suit :
• Vendeur : 20% du chiffre d’affaires qu’il réalise plus 300 DT
• Représentant : 30% du chiffre d’affaires qu’il réalise plus 700 DT
• Technicien : nombres d’unités qu’il produit * 5
1. Proposer un diagramme de classes relatif aux employés de l’entreprise.
2. Donner le code de chaque classe.
3. Ajouter une classe Entreprise qui contient la liste des employés de
l’entreprise et définir les méthodes :
• void ajouterEmploye(Employe $e) : qui permet d’ajouter un employé à
l’entreprise.
• double salaireMoyen() : qui retourne le salaire moyen des employés de
l’entreprise.
• void afficherSalaires() : qui affiche tous les salaires des employés sous la
forme : Le Titre Prénom Nom gagne Salaire Dinars.
Par exemple : Le Vendeur Ali Ben Brahim gagne 1520.25 Dinars.
4. Ecrire un programme principal qui utilise les classes précédentes pour
afficher le message suivant :
Le
Le
Le
Le
vendeur Ahmed Harbaoui gagne 6400.0 Dinars.
représentant Hbib Ben Abid gagne 4800.0 Dinars.
technicien Haithem Rahmani gagne 5000.0 Dinars.
salaire moyen dans l'entreprise est de 5400.0 Dinars.
