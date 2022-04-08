#!/bin/bash
echo "hola mundo";
cd sample-webview;
./gradlew assembleDebug;
cd ..;
cd web;
php create-phar.php;
