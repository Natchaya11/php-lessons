Opérations de base sur les fichiers

ls (list) : Liste les fichiers et répertoires.
- -l : Format long, affichant les permissions, la propriété, la taille et la date de modification.
- -a : Inclut les fichiers cachés.

> ls -la

cd <répertoire> (change directory) : Change le répertoire courant.
.. : Remonte d'un répertoire.

> cd ../

mkdir <répertoire> (make directory) : Crée un nouveau répertoire.
- -p : Crée les répertoires parents si nécessaire.

> mkdir -p nouveau_dossier/sous_dossier

rmdir <répertoire> (remove directory) : Supprime un répertoire vide.

> rmdir ancien_dossier

rm <fichier> (remove) : Supprime des fichiers ou des répertoires.
- -r : Récursif, pour supprimer des répertoires et leur contenu.
- -f : Force, ignore les fichiers et arguments inexistants, ne demande jamais.

> rm -rf ancien_dossier

cp <source> <destination> (copy) : Copie des fichiers ou des répertoires.
- -r : Récursif, pour copier des répertoires.

> cp -r dossier1 dossier2

mv <source> <destination> (move) : Déplace ou renomme des fichiers ou des répertoires.

> mv ancien_nom.txt nouveau_nom.txt

Contrôle de version avec Git

git init : Initialise un nouveau dépôt Git.
git clone <dépôt> : Clone un dépôt dans un nouveau répertoire.
git add <fichier> : Ajoute le contenu du fichier à l'index.
. : Ajoute tous les changements.

> git add .

git commit -m "<message>" : Enregistre les changements dans le dépôt.
> git commit -m "Commit initial"

git push <remote> <branche> : Met à jour les refs distantes ainsi que les objets associés.
> git push origin master

git pull <remote> : Récupère depuis et intègre avec un autre dépôt ou une branche locale.
> git pull origin master