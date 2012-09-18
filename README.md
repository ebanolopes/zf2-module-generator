ZF2 Module Generator
====================
Version 0.0.1 created by Ébano Lopes

Introduction
------------
This is simple code, intented to create basics files for Zend Framework 2 module. This is not a ZF Tool like script!

Concepts
--------
Script zf2.php recursively replicates module/Template directory into module/:NewModule directory. From template it changes:
- Directory names "template" to "newmodule" and "Template" to "NewModule"
- Files contents {$module} are replaced with "NewModule" and {$moduleLower} are replaced with "newmodule"

Installation
------------
Copy files bellow into you application root directory:
- zf2.php
- zf2.sh
- whole module/Template directory

Give zf2.sh execute permission (e.g.: chmod o+x zf2.php)

Usage
-----
Change/add new files and directories into you application module/Template directory, following "Concepts" rules.

On shell type the follow command, from your application root directory: ./zf2 create module NewModule

Don't forget to add your "NewModule" module to modules configuration on config/application.config.php

Fine! Your new module is configured and ready to go! :)
