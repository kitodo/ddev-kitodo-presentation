#!/bin/sh

# start ddev, create project, build container
ddev start

# install all packages via composer
ddev composer install

# import basic database
ddev import-db -f kitodo-slubdigitalcollections.sql.gz

# reindex all documents (DB -> Solr)
ddev typo3 kitodo:reindex -a -p 2 -s dlfCore0

