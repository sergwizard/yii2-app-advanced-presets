Yii 2 Advanced Project Template wich base presets
=================================================

Cloning a repository
====================

1. Under the repository name, click Clone or download.
2. In the Clone with HTTPs section, click  to copy the clone URL for the repository.
3. Open Terminal.
4. Change the current working directory to the location where you want the cloned directory to be made.
5. Type this: 
```
git clone https://github.com/sergwizard/yii2-app-advanced-presets.git

```
6. This command will create a project folder "yii2-app-advanced-presets" inside the selected folder yii2-app-advanced-presets 
7. Rename "yii2-app-advanced-presets" as you want
8. Go to "yii2-app-advanced-presets" or new named folder in Terminal 
```
cd /opt/lampp/htdocs/yii2-app-advanced-presets

```
9. Update composer by
```
composer update

```

What's been added in my preset version
======================================

....... part in working.......




Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

 Version](https://poser.pugx.org/yiisoft/yii2-app-advanced/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-advanced/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
