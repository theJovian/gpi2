#!/bin/bash
##echo "analysing android...";
##cd sample-webview;
##./gradlew sonarqube -Dsonar.host.url=http://localhost:9000;

echo "analysing wordpress...";
cd ..;
cd web;
cd wordpress;
sonar-scanner -Dsonar.login=fac0a663b8d5003791ffc3caf02e6888302e52a2;
