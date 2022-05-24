#!/bin/bash
echo "building android...";
cd sample-webview;
./gradlew assembleDebug;

echo "\n\n------------------------------------\n\n";

echo "building easybuggy...";
cd ..;
cd easybuggy-master;
mvn compile -Denforcer.skip=true;
