#!/bin/bash
echo "Packaging wordpress...";
cd web;
php create-phar.php;

echo "\n\n------------------------------------\n\n";

echo "Packaging easybuggy...";
cd ..;
cd easybuggy-master;
mvn clean install -Denforcer.skip=true;
