FurrySkeleton WebApp Framework
==============================

This is a code skeleton for quick-starting development of Bootstrap+PHP+MySQL web apps using good practices and security conserns

The intension of it is to stop wasting time with setting up a new projects basic structure and functionalities. It comes out-of-the-box with Jasny Bootstrap, and APIs for database `CRUD` using and dumps, `template system`, sending `mails`, managing `sessions` & `user-roles`.

I'm constantly adding more libraries to core functionalities as I need to use them in my projects, you can see the list in the git's wiki. Feel free to ask or add more :)

Functionalities:
----------------
-  MySQL CRUD
-  MySQL database dump for backups
-  Contact form, mail handling
-  Basic template system
-  Input Sanitizing for SQL Injections and XSS
-  PHPass password hashing
-  PHP Sessions using (auto-expire included) and protection against Session Fixation Attacks)
-  Easy to define User Roles and restrictions

Everything set for quick and easy use.

Usage:
------

Any page can be quickly started like this
```
<?php
  include_once('core.php');
  definePrivileges(ADMIN_ROLE);
  
  printHeader('Hello World!');
?>
  <h1>Hello World!</h1>
  <p> Wonderful page is ready with bootstrap and everything</p>
<?
  printFooter();
?>
```

For seetings, you should have a look at `config.php` and also get the correct user role from the database at `core.php` in the _Session Globals_ section 


**keywords:** _HTML5_, _jQuery_, _CSS3_, _PHP simple framework_, _database CRUD_
