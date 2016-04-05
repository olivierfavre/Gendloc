PA_GENDLOC
==========

    vagrant up
    vagrant ssh
    cd /vagrant
    php bin/console doctrine:createdb
    php bin/console doctrine:schema:update --force
    
Éditer le fichier *app/config/parameters.yml* et modifier la variable devmail
pour recevoir les mails de dev. (envoi sms).

    php bin/console server:run 0.0.0.0:8000
    
Allez dans votre navigateur à l'adresse *http://127.0.0.1:8000* et tester !
