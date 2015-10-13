# Scaffold

<a href="#" id="status-image-popup" name="status-images" class="open-popup" data-ember-action="880">
    <img title="Build Status Images" src="https://travis-ci.org/krzysiekpiasecki/Scaffold.svg">
</a>

# Scaffolding process

### Clonning scaffold
``` bash
$ git clone https://github.com/krzysiekpiasecki/Scaffold.git
```

### Creating local repository
``` bash
$ cd Scaffold
$ rm -rf .git
$ git init
```

### Installing devolopment tools
``` bash
$ composer install --dev
```

# Using development tools

#### Running unit tests

``` bash
$ php ./vendor/bin/phpunit
```

#### Fixing code according to PSR-2

``` bash
$ php ./vendor/bin/php-cs-fixer fix
```

#### Displaying software metrics

``` bash
$ php ./vendor/bin/phploc src
```

#### Using stopwatch
```php
$sw = new \KrzysiekPiasecki\Diagnostics\Stopwatch();
$time = $sw1->watch()->time();
```
[More on using stopwatch](https://github.com/krzysiekpiasecki/Stopwatch)

# Starting project

- Change project folder name
- Add your credentials to LICENCE.md
- Update composer.json and install required dependecies
- Create new github repository
- Connect repository with Travis CI
- Connect repository with Scrutinizer CI
- Publish your repository to github.com
