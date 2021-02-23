#!/bin/bash

LOCATIONS=$(cat documents.txt)
KITODO_SOLR=1
KITODO_PID=2
EXEC="ddev exec vendor/bin/typo3"
#EXEC="./vendor/bin/typo3"

for LOC in $LOCATIONS; do
	echo $LOC
	$EXEC kitodo:index -p $KITODO_PID -s $KITODO_SOLR -d "$LOC"
done
