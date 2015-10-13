# Project

<a href="#" id="status-image-popup" name="status-images" class="open-popup" data-ember-action="880">
    <img title="Build Status Images" src="https://travis-ci.org/krzysiekpiasecki/Scaffold.svg">
</a>

## Scaffolding

``` bash
$ git clone https://github.com/krzysiekpiasecki/Scaffold.git
$ cd Scaffold
$ rm -rf .git
```

## Initializing local git repository
``` bash
$ git init
```

## Adding project dependencies

Add your dependencies to composer.json and then execute command:
``` bash
$ composer install
```

## Running tests

``` bash
$ php ./vendor/bin/phpunit
```

## Displaying software metrics

``` bash
$ php ./vendor/bin/phploc src
```
