#!/bin/bash
echo "building android...";
cd sample-webview;
./gradlew assembleDebug;

echo "\n\n------------------------------------\n\n"

echo "Building wordpress...";
cd ..;
cd web;
php create-phar.php;
