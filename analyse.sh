#!/bin/bash
echo "analysing android...";
cd sample-webview;
./gradlew sonarqube -Dsonar.host.url=http://localhost:9000;

echo "\n\n------------------------------------\n\n";

echo "Analysing wordpress...";
cd ..;
cd web;
cd wordpress;
/opt/sonar-scanner-4.7.0.2747-linux/bin/sonar-scanner -Dsonar.login=fac0a663b8d5003791ffc3caf02e6888302e52a2;

echo "\n\n------------------------------------\n\n";
echo "Analysing easybuggy...";
cd ..;
cd ..;
cd easybuggy-master;
sonar-scanner \
  -Dsonar.projectKey=easybuggy \
  -Dsonar.sources=. \
  -Dsonar.host.url=http://localhost:9000 \
  -Dsonar.login=fac0a663b8d5003791ffc3caf02e6888302e52a2
