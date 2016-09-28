#!/bin/bash

# Probably unneed packages included (Copypaste from: http://askubuntu.com/questions/772397/mbstring-is-missing-for-phpmyadmin-in-ubuntu-16-04)
sudo apt-get install -y php-mbstring php7.0-mbstring php-gettext libapache2-mod-php7.0
sudo phpenmod mbstring

echo
echo "Check if mstring php module is enabled:"

IS_MBSTRING_ENABLED=$(php -m | grep mbstring)
if [ "$IS_MBSTRING_ENABLED" == "mbstring" ]; then
  echo -e "\tOK"
else
  echo -e "\tKO"
fi
