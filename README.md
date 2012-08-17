Silex Perch Integration
=======================

This project is a base for your [Silex](http://silex.sensiolabs.org/) applications that needs [Perch](http://grabaperch.com) integration for a truly
simple and friendly backend interface.

Silex is a powerful micro-framework for PHP, built on the shoulders of Symfony2. The idea is to
use Silex to provide the frontend magic, while you can separate and present the robust Perch backend to
your customers.

Installation
------------

Start by cloning this repository, and install the dependencies using [Composer](http://getcomposer.org):

    git clone https://github.com/cvaldemar/Silex-Perch.git silex-perch
    cd silex-perch
    curl -s http://getcomposer.org/installer | php
    php composer.phar install

Install a copy of Perch into `vendors/perch`:

    unzip perch_v1.8.4.zip
    mv perch_v1.8.4 silex_perch/vendors/perch

Finally, configure Perch, by creating a config/config.php. If you install the backend separately or have it
running already just copy config.php from that installation. If you are installing a clean Perch make sure
you create the database and database tables using the perch.sql included with Perch.

Then what?
----------

Start hacking in `src/controllers.php`. Create your Twig views in `views/` and use the new Twig
tags to initialize content from the Perch backend.

Example:

    {{ perch_runtime() }}
    <h1>{{ perch_content('Title') }}</h1>
    <p>{{ perch_content('Body') }}</p>

Note: You must call perch_runtime to initialize the Perch runtime.

Todo
----

 * Develop the Twig integration further
 * Make sure Perch apps work
 * Figure out how and where to put Perch to avoid having two installations

Credits
-------

Perch-Twig integration based on and inspired by Gavin McFarland's [twig-perch-extension](https://github.com/sevenupcan/twig-perch-extension)

Silex is brought to you by [Fabien Potencier](http://fabien.potencier.org), the creator of the [Symfony framework](http://symfony.com), and [Igor Wiedler](http://twitter.com/igorwesome).

License
-------

Licensed under the MIT license.