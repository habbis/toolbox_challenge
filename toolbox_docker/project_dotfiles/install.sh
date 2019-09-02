#!/bin/bash

command_exists() {
    type "$1" > /dev/null 2>&1
}

echo "Installing dotfiles."


source install/link.sh

if [ ! -d /home/userboy/.vim ]; then
cd /home/userboy || exit
curl -fLo ~/.vim/autoload/plug.vim --create-dirs \
	    https://raw.githubusercontent.com/junegunn/vim-plug/master/plug.vim
fi 



if [ ! -d /home/userboy/.scripts ]; then
mkdir -p ~/.scripts/

echo "Done. Reload your terminal."
