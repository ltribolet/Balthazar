# Balthazar

## Dependencies

First you need to install npm that is included in the NodeJS installer : [http://nodejs.org/]

If not already done you should have PHP installed on your system.

Be sure as well to have pdo_sqlite activated (in php.ini) and mcrypt.

You'll need Composer as well : [http://getcomposer.org] 

## Installing

Then run those commands :

    $ npm install -g gulp
    $ npm install -g bower
    $ composer install
    $ npm install
    $ bower install

Finally to get the assets populated

    $ gulp

or

    $ gulp watch

## Running

Before doing anything, you'll have to setup the database with :

    $ php artisan migrate

That will create all databases needed for the application.

You can finally test it with :

    $ php artisan serve

That should run up a web server at http://localhost:8000

