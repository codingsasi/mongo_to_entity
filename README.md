CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * How to use
 * To Do


INTRODUCTION
------------

This module allows to import data from mongodb to Drupal entity. An entity is defined "Location" with bundle "City".
Mongo DB holds the list of cities in the following format:
```json
[
  {
    "_id": "01001",
    "city": "AGAWAM",
    "loc": [
      -72.622738999999995713,
      42.07020599999999888
    ],
    "pop": 15338,
    "state": "MA"
  },
  {
    "_id": "01002",
    "city": "ASFA",
    "loc": [
      -72.622738999999995713,
      99.07099999999888
    ],
    "pop": 234234,
    "state": "LA"
  },
]
```
After connecting the database in the interface provided, simply run the drush command "drush migrate-import --all"
You can write your own migrations by simply extending the sources and/or destination plugins defined in this module.

REQUIREMENTS
------------
Drupal 8 or 9
Migrate and Migrate Tools module.
The PHP MongoDb driver must be installed on your server.

For ubuntu: 
`sudo apt install php-pear`
`sudo pecl install mongodb`

For fedora and other redhar systems:
`sudo yum install php-pear` or `sudo dnf install php-pear`
`sudo pecl install mongodb`

HOW TO USE
----------
1. Enable the module.
2. In the mongo db credentials form (/admin/config/mongo_to_entity/mongodbcredentials), enter your mongo db host, port and database name
3. In the Entity Map form (/admin/config/mongo_to_entity/mongotoentitymap/location/city), map the entity fields to the mongodb database tables. Only the mapped fields will be imported, rest will ignored.
4. Run the drush command.

TODO
-----
1. Extend the import functionality to other entities and bundles (Although hopefull it should already work - untested).
2. Rollback for migrations.
3. Code comments.
4. Validations and prvent empty entity creation.
5. Add menu link from location entity page to map entity to mongo db table.

RESOURCES
---------
1. https://docs.mongodb.com/drivers/php
2. https://www.drupal.org/docs/8/api/migrate-api/migrate-destination-plugins-examples/migrating-nodes
3. https://www.drupal.org/docs/drupal-apis/migrate-api/executing-migrations
4. https://api.drupal.org/api/drupal/core!modules!migrate!src!Plugin!migrate!source!EmbeddedDataSource.php/class/EmbeddedDataSource
5. https://drupal.stackexchange.com/questions/208570/how-do-i-write-a-custom-migrate-destination-plugin-in-for-a-node-type
6. https://www.drupal.org/project/drupal/issues/2925052
7. https://www.php.net/manual/en/mongodb-driver-cursor.toarray.php

MISC
----
I have used drupal console extensively to generate module code, entity code and migration source and destination plugins. 
