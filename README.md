# Umeå Kampcenter web
Web site for Umeå Kampcenter, a martial arts academy in Sweden.

## Getting started
These instructions will get you a copy of the project up and running on Windows.

### Prerequisites
Download [PHP 7.1 for Windows](http://windows.php.net/download/) (VC14 x64 Non Thread Safe) and extract it to the location of your choice (example: C:\php). Make sure you add the PATH to PHP.

Download and install [Git](https://git-scm.com/download/win). Add the PATH to Git (usually C:\Program Files\Git\cmd).

Download the [Composer installer](https://getcomposer.org/doc/00-intro.md#installation-windows) (Composer-Setup.exe). Make sure you add the PATH to Composer (usually C:\ProgramData\ComposerSetup\bin).

### Installation
Clone the repository to a folder on your drive using Git. If you are using PHPStorm this can be done by creating a project from Github.

Open up a Git bash console in your project folder and install the project dependencies:
````
composer install
````

Run the built-in PHP web server:
````
php artisan serve --port=80
````

### PHPStorm specific settings
Go to _file -> settings_ and the category _Languages & Framework > PHP_. Add a CLI interpreter for PHP 7.1 and point it to your PHP folder.

In settings, under _Languages & Framework > PHP > Composer_, set the paths for ```composer.json``` (project folder) and ```composer.phar``` (usually C:\ProgramData\ComposerSetup\bin\composer.phar).
