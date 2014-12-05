sf_mme
======

Multiple Entity Class Inheritance in Doctrine with Symfony 2
======

The purpose of this repository is the research result of mutualise some functionnality in a SF2 project.

The code is in Entity folder and in DataFixtures/ORM folder.

Have a good reading.

If you want to test this code research you'll have to use :
* Symfony 2 : Symfony Standard Edition 2.3.* max (there are several bugs in 2.4 and 2.5 for time)
* Doctrine Fixtures : doctrine/doctrine-fixtures-bundle ~2.2
* Doctrine Extensions : stof/doctrine-extensions-bundle ~1.1
** with sluggable enabled : 
```yml
# Stof\DoctrineExtensionBundle configuration
stof_doctrine_extensions:
    orm:
        default:
            sluggable: true
```
* Name the Bundle like this : Lk\EntManipsBundle


1°) make sure You have clean you're database (PHPMYADMIN or similar) :
* SET FOREIGN_KEY_CHECKS=0; DROP TABLE `ExtendedType`, `Plop`, `plop_tagada`, `Tagada`, `Type`; SET FOREIGN_KEY_CHECKS=1;
2°) call the generation of database (sf2 console) :
* php app/console doctrine:schema:update --force
3°) check if the tables are correctly generated
* go to PHPMYADMIN ...
4°)  populate tables with the fixtures :
* php app/console doctrine:fixtures:load
* say 'Y' to clean db before inserts
5°) go to PHPMYADMIN ... and see what a clean database and datas you have now ;-)
======
UML Model of this Concept :

![UML Entities diagram](https://raw.githubusercontent.com/loamok/sf_mme/master/Doc/MultipleMappingEntities.png)

======
Database Model of this Concept :

![Resulting DB Model](https://raw.githubusercontent.com/loamok/sf_mme/master/Doc/MultipleMappingEntitiesDBModel.png)