# Laravel 5.7 CRUD Using Resource Controller

Create CRUD functionality using Resource Controller; CRUD - Creating, Reading, Updating, and Deleting resources from database.

## Getting Started

1. For localhost I used "ApacheFriends XAMPP Version 7.2.11" integrated with: PHP 7.2.11, Apache 2.4.35, MariaDB 10.1.36, etc. Remember to run Apache and MySQL via XAMPP Control Panel!
2. Composer from https://getcomposer.org/
3. Node.js from https://nodejs.org/en/

### Prerequisites

Create Laravel project and a folder for it called "crud".

```
C:\xampp\htdocs>composer create-project laravel/laravel crud
```

And if you need to style with SASS then do:

```
C:\xampp\htdocs>npm install
```

Run XAMPP and use browser to go to: localhost/phpmyadmin

1. User accounts
2. Select the one where User is root and Host name is localhost
3. Click on Edit privileges
4. Now click on Change password
5. Write your_new_password

Now put your password into a config file:

1. location is: C:\xampp\phpMyAdmin
2. filename is: config.inc.php
3. line to edit is: $cfg['Servers'][$i]['password'] = 'your_new_password';

### Installing

For convenient localhost view put the code below at the end of the file: "httpd-vhosts.conf" located at: C:\xampp\apache\conf\extra

```
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/crud/public"
    ServerName crud.dev
</VirtualHost>
```

The next file you need to open as an admin and put the code below at the end of the file named "hosts", located at: C:\Windows\System32\drivers\etc

```
127.0.0.1 localhost
127.0.0.1 crud.dev
```

Now restart Apache via XAMPP Control Panel. Then open web browser and write "crud.dev" and you should see an opening Laravel page.

### Create a database

1. Open web browser and write "localhost/phpmyadmin".
2. Create a database called "crud", no tables are needed.
3. Modify lines inside ".env" file and put in your_new_password instead of \*\*\*:

```
APP_NAME=CRUD
DB_DATABASE=crud
DB_USERNAME=root
DB_PASSWORD=***
```

## Deployment

Add additional notes about how to deploy this on a live system

## Authors

-   **Rain Kütt**

## License

This project is licensed under the MIT License.