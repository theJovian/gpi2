#!/bin/bash
echo "building android...";
cd sample-webview;
./gradlew assembleDebug;

echo "building wordpress...";
cd ..;
cd web;
php create-phar.php;
