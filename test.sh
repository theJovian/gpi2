#!/bin/bash
echo "testing android...";
cd sample-webview;
./gradlew test;

echo "testing wordpress...";
cd ..;
cd web;
php phpunit-6.5.phar wordpress/tests/StackTest.php;
