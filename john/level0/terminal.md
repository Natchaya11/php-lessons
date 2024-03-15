# Basic File Operations

ls (list): Lists files and directories.
- -l : Long format, showing permissions, ownership, size, and modification date.
- -a : Includes hidden files.

> ls -la

cd <directory> (change directory): Changes the current directory.
..: Move up one directory.

>  cd ../

mkdir <directory> (make directory): Creates a new directory.
- -p: Creates parent directories as needed.

>  mkdir -p new_folder/sub_folder

rmdir <directory> (remove directory): Deletes an empty directory.
>  rmdir old_folder

rm <file> (remove): Deletes files or directories.
- -r : Recursive, for deleting directories and their contents.
- -f : Force, ignores nonexistent files and arguments, never prompts.

>  rm -rf old_folder

cp <source> <destination> (copy): Copies files or directories.
- -r : Recursive, for copying directories.

>   cp -r folder1 folder2

mv <source> <destination> (move): Moves or renames files or directories.

>   mv old_name.txt new_name.txt

# Version Control with Git

git init: Initializes a new Git repository.
git clone <repository>: Clones a repository into a new directory.
git add <file>: Adds file contents to the index.
.: Adds all changes.

>   git add .

git commit -m "<message>": Records changes to the repository.

>   git commit -m "Initial commit"

git push <remote> <branch>: Updates remote refs along with associated objects.

>   git push origin master

git pull <remote>: Fetches from and integrates with another repository or a local branch.

>   git pull origin master
