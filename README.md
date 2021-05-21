# runComposers
Developing with Composer will provide you a finite product that serve better functionality in easy and effecient manner.
Interested in browse getcomposer.org
## Installing composer
### On Window
  to install download it from gitcomposer.org and follow GUI installation step.
### On MacOs and linux
  #### chech php version if not less than 7.x 
  > mampphp -v
  #### switching the versions
  edit your bash profile and add line [alias mampphp = "php path"] command to open is below
  > vim ~/.bashprofile
  #### install composer
  > curl -sS https://getcomposer.org/installer | mampphp
  #### running composer
  > mampphp composer.phar
  ###### to solve this long line to run composer do
  > mv composer.par /usr/local/bin/composer

## Initializing composer repo (project directory)
  > composer init
## Searching for composer
  > composer search <library: php validation or validation>
## Installing package/ library
  > composer require <package: carbon or swiftmail>
  #### you can also install package manual in your composer.json in require section for example
  > "require": { <"package": "version" >}
  > eg: "require": { "swiftmailer": "<~4.1.1>" }
  ###### This manual setup require you to be installed and updated let do it
  > require install
  > require update
## Use installed package composer in php
  > require_one __DIR__."<path to autoload.php : /vendor/autoload.php>";
  
  
  
