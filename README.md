# DrupalCZ Workshop 2

## Instrukce

Proveďte git clone z tohoto repozitáře do vašeho adresáře.

Spusťe Lando

    lando start -v

Soubor web/sites/workshop.settings.php
zkopírujte jako web/sites/default/settings.php.

Základní instalace Drupalu:
lando drush si minimal --existing-config

Imporovat config:
lando drush cim

Zkontrolujte jak Drupal funguje.

    lando drush status
    
Pokud vidíte následující, je vše OK :)

    Database         : Connected                         
    Drupal bootstrap : Successful
