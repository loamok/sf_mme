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

======
UML Model of this Concept :

![UML Entities diagram](https://raw.githubusercontent.com/loamok/sf_mme/master/Doc/MultipleMappingEntities.png)

======
Database Model of this Concept :

![Resulting DB Model](https://raw.githubusercontent.com/loamok/sf_mme/master/Doc/MultipleMappingEntitiesDBModel.png)