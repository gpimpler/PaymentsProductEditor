#!/usr/bin/env bash
echo ' '
echo ' /$$   /$$  /$$$$$$  /$$   /$$ '
echo '| $$  | $$ /$$__  $$| $$  | $$'
echo '| $$  | $$| $$  \__/| $$  | $$|'
echo '| $$$$$$$$| $$      | $$$$$$$$|'
echo '| $$__  $$| $$      | $$__  $$|'
echo '| $$  | $$| $$    $$| $$  | $$|'
echo '| $$  | $$|  $$$$$$/| $$  | $$|'
echo '|__/  |__/ \______/ |__/  |__/  Project Installer'
echo ' '

echo "This install requires a Node version of 6.0 or greater, NPM, Bower, and also NVM (Node Version Manager)."
echo "Node Version:"
node --version
echo "NPM Version:"
npm --version
echo "Bower Version:"
bower --version
if nvm list 6 | grep "N/A"
then
nvm install 6.1.0
fi
nvm use 6.1.0
npm install
bower install
echo "Build and run the server using 'gulp build'"