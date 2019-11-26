#!/bin/bash
R='\033[1;31m'                                                        G='\033[1;32m'                                                        Y='\033[1;33m'                                                        B='\033[1;34m'                                                        M='\033[1;35m'                                                        C='\033[1;36m'                                                        W='\033[0m'

if [ ! -e ~/scam ]; then
echo -e "$G[$Y!$G]$W Scam no esta instalado en HOME"
echo -e "$G[$Y!$G]$W porfavor instalanos en HOME :3"
exit
fi
echo -e "$G[+]$W Instalando requisitos..."
sleep 3
if [ -e /data/data/com.termux/files/usr/bin ]; then
apt -y update &>> /dev/null
apt -y upgrade &>> /dev/null
echo -e "$G[+]$W Instalando openssh..."
pkg install -y openssh &>> /dev/null
echo -e "$G[+]$W Instalando php..."
pkg install -y php &>> /dev/null
echo -e "$G[+]$W Instalando python[2][3]"
pkg install -y python &>> /dev/null
pkg install -y python2 &>> /dev/null
echo -e "$G[+]$W Instalando wget..."
pkg install -y wget &>> /dev/null
else
sudo apt-get update -y &>> /dev/null
sudo apt-get upgrade -y &>> /dev/null
echo -e "$G[+]$W Instalando php...."
sudo apt-get install -y php &>> /dev/null
echo -e "$G[+]$W Instalando python[2][3]"
sudo apt-get install -y python &>> /dev/null
sudo apt-get install -y python2 &>> /dev/null
echo -e "$G[+]$W Instalando wget..."
sudo apt-get install -y wget &>> /dev/null

fi


chmod 700 ~/scam/phishing.sh
echo $(clear)
sleep 2
echo
echo
echo
echo -e "$G[+]$W Finished!"
sleep 0.8
echo -e "$G[+]$W Created by @CesarHackGray"
sleep 0.7
echo -e "$G[+]$W Contactame https://t.me/CesarGray"
sleep 0.4
echo -e "$G[+]$W Usage: ./phishing.sh [option]"
rm -rf ~/scam/install.sh
echo
echo
exit 3
