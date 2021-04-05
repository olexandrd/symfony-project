Symfony Demo Application
========================

The "Symfony Demo Application" is a reference application created to show how
to develop applications following the [Symfony Best Practices][1].

Requirements
------------

  * PHP 7.2.9 or higher, > 8.0;
  * Postgres and PDO-Psql PHP extension enabled;
  * and the [usual Symfony application requirements][2].

Installation
------------
  * initial database dump is [placed here][3];
  * vendors must be installed by composer;
  * database migration is necessary;  
  * static files installed by yarn (`yarn install && yarn build`).


[1]: https://symfony.com/doc/current/best_practices.html
[2]: https://symfony.com/doc/current/reference/requirements.html
[3]: data/symfony.sql