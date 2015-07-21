# A Facebook sharing Module for the Content Construction Kit \(CCK\) \(mod_facebook\)

## Description

Visually, this module is rendered as an FB button in an aside tag. The "fb-root" div tag is hardcoded within the template to avoid issues with autocreation. It provides the ability for your visitors to like a particular page and publish it automatically to their own Facebook timeline \(previously called the wall\).

Using the [Facebook Connect portion of the SDK for JS API](http://developers.facebook.com/docs/javascript), 
this module injects a Javascript into the webpage's Document Object Model \(DOM\). 
This script is dynamically assigned the `ID`entification of [facebook-jssdk](https://connect.facebook.net/en_US/all.js#xfbml=1&appId=196199780565306).

## Requirements

* Joomla 3.X . Untested in Joomla 2.5.
* Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
* PHP 5.3.10 or better
* Composer

## Installation \(after improvement\)

### Composer

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories
section:

from the local repository;

```json
{
    "name": "moyo/mod_facebook",
    "type": "vcs",
    "url": "https://github.com/kedweber/mod_facebook.git"
}
```

and from the official repository;

```json
{
    "name": "moyo/mod_facebook",
    "type": "vcs",
    "url": "https://github.com/moyoweb/mod_facebook.git"
}
```

The require section should contain the following line:

```json
    "moyo/mod_facebook": "1.0.*",
```

Afterwards, one just needs to run the command `composer update` from the root of your Joomla project. This will 
effectively create a `composer.lock` file which will contain the collected dependencies and the hash codes for 
each latest release \(depending on the require section's format\) for each particular repo. Should installations 
problems occur due to a bad ordering of the dependencies, one may need to go into the lock file and manualy change 
the order of the components. Running `composer update` again will again cause a reordering of the lock file, beware of 
this factor when running an update. Thereafter, you can run the command `composer install`. 

If you have not setup an alias to use the command composer, then you will need to replace the word composer in the previous commands with the 
commands with `php composer.phar` followed by the desired action \(eg. update or install\).

### jsymlinker

Another option is to run the [jsymlink script](https://github.com/derjoachim/moyo-git-tools) in the root folder, available via the original Moyo developer, Joachim van de Haterd's repository, under 
the [Moyo Git Tools](https://github.com/derjoachim/moyo-git-tools).

#### License jsymlinker

The joomlatools/installer plugin is free and open-source software licensed under the [GPLv3 license](https://github.com/derjoachim/joomla-composer/blob/develop/gplv3-license).


