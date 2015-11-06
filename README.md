Apigility Skeleton Application
==============================

Installation
------------

First, clone the repository:

```bash
git@github.com:undefinedsource/api-apigility.git
cd api-apigility
```

At this point, you need to use [Composer](https://getcomposer.org/) to install
dependencies. Assuming you already have Composer:

```bash
composer install
```

Once you have the basic installation, you need to put it in development mode:

```bash
php public/index.php development enable
```

Now, fire it up! Do one of the following:

- Create a vhost in your web server that points the DocumentRoot to the
  `public/` directory of the project
- Fire up the built-in web server in PHP (5.4.8+) (**note**: do not use this for
  production!)

In the latter case, do the following:

```bash
php -S 0.0.0.0:8080 -ddisplay_errors=0 -t public public/index.php
```

You can then visit the site at http://localhost:8080/ - which will bring up a
welcome page and the ability to visit the dashboard in order to create and
inspect your APIs.