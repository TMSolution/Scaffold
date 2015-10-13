# Project

<a href="#" id="status-image-popup" name="status-images" class="open-popup" data-ember-action="880">
    <img title="Build Status Images" src="https://travis-ci.org/krzysiekpiasecki/Scaffold.svg">
</a>

### Scaffolding

``` bash
$ git clone https://github.com/krzysiekpiasecki/Scaffold.git
$ cd Scaffold
$ composer install --dev
$ rm -rf .git
```

### Initializing local git repository
``` bash
$ git init
```

### Running unit tests

``` bash
$ php ./vendor/bin/phpunit
```

### Fixing code according to PSR-2

``` bash
$ php ./vendor/bin/php-cs-fixer fix
```

### Displaying software metrics

``` bash
$ php ./vendor/bin/phploc src
```
