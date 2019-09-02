#!/bin/bash

command_exists() {
    type "$1" > /dev/null 2>&1
}

echo "Installing dotfiles."


source ~/dotfiles/install/link.sh

if [ ! -d /home/user/.vim ]; then
cd /home/user || exit
curl -fLo ~/.vim/autoload/plug.vim --create-dirs \
	    https://raw.githubusercontent.com/junegunn/vim-plug/master/plug.vim
fi 



if [ ! -d /home/user/.scripts ]; then
mkdir -p ~/.scripts/
fi

echo "Done. Reload your terminal."
