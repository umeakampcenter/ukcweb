# Umeå Kampcenter web
Web site for Umeå Kampcenter, a martial arts academy in Sweden.

## Getting started
These instructions will get you a copy of the project up and running on Windows.

### Prerequisites
Download Xampp with PHP 8+ and MySQL/MariaDB.

Download and install [Git](https://git-scm.com/download/win). Add the PATH to Git (usually C:\Program Files\Git\cmd).

Download the [Composer installer](https://getcomposer.org/download/) (Composer-Setup.exe). Make sure you add the PATH to Composer (usually C:\ProgramData\ComposerSetup\bin).

### Installation
Clone the repository to a folder on your drive using Git. If you are using PHPStorm this can be done by creating a project from Github.

Open up a Git bash console in your project folder and install the project dependencies:
```
composer install
```

Create a `.env` file from the example file and run:
```
php artisan key:generate
```

Install the frontend dependencies and start the build script:
```
npm i
npm run dev
```

Run the migrations and set up the Twill CMS:
```
php artisan twill:update --migrate
```

Seed the database with essential data:
```
php artisan db:seed
```

Create a Twill CMS user:
```
php artisan twill:superadmin <email> <password>
```

Run the built-in PHP web server:
```
php artisan serve --port=8080
```
