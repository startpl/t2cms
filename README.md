Installation
============

## Requirements

The minimum requirement by this project template is that your Web server supports PHP 7.1

## Installing using Composer

With Composer installed, you can then install the application using the following commands:

    composer create-project --prefer-dist startpl/t2cms t2cms-application

The command installs the advanced application in a directory named `t2cms-application`. You can choose a different
directory name if you want.

## Preparing application

After you install the application, you have to conduct the following steps to initialize
the installed application. You only need to do these once for all.

1. Open a console terminal, execute the `init` command and select `dev` as environment.

   ```
   php /path/to/t2cms-application/init
   ```
2. Create a new database and adjust the `components['db']` configuration in `/path/to/t2cms-application/common/config/main-local.php` accordingly.
   Also you should set charset = utf8mb4 

3. Open a console terminal, apply migrations with command `php /path/to/t2cms-application/yii migrate`.

4. Also in a console terminal, run the installation of the T2CMS core with command `php /path/to/t2cms-application/yii t2cms/init`

## Usage
Go to Admin Panel ( /admin )

with admin user:
```
login: admin
password: admin@admin
```
> # Don't forget to change your password!