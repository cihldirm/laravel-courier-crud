# laravel-courier-crud
Courier CRUD App by Laravel

<p align="center" dir="auto"><a href="https://laravel.com" rel="nofollow"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" style="max-width: 100%;"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost you and your team's skills by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## System Requirements

The following are required to function properly.
- PHP Version：PHP 7.3.x
- Laravel Version：8.8.x
- Composer
- Command Line Interface (CLI) for example: Command Prompt (CMD) or Power Shell or Git Bash
- Code Text Editor

## Installation Step-by-step
1. Download the Source Code from the Github repository laravel-courier-crud in Zip format or clone from the laravel-courier-crud repository.
2. Extract the zip file (source code) or set the clone path destination to the htdocs directory on XAMPP, for example htdocs/laravel-courier-crud.
3. Via the terminal, cd to the laravel-courier-crud directory.
4. (According to the installation instructions) In the terminal, give the command `composer install` or `composer update`. This process requires an internet connection and wait for Composer to install the package dependencies from the source code until it is complete.
5. Open the .env file and create a new database named `gradin-backend-test` according to the database name (DB_DATABASE) in the .env file, the username field (DB_USERNAME) and password (DB_PASSWORD) according to your configuration.
6. Run the `php artisan key:generate` command to create a new application key (APP_KEY) in the .env file. This key is used for data encryption and decryption, such as user sessions and tokens.
7. Run the `php artisan migrate` command to run database migrations in our Laravel application and local database. This migration will apply the database structure changes that have been defined in the migration file.
8. In the `gradin-backend-test` database and the `couriers` table in phpMyAdmin, import `couriers.sql` to insert the data source into the database table.
9. Run the `php artisan serve` command to run and access our application on localhost with the url http://localhost:8000/

## Demo
1. Go to the url http://localhost:8000/couriers, which is the Courier Index Page that displays a data table of all couriers with the number of pagination from the controller, namely `CourierController` and the default or initial sort is sorted by courier name in ascending order.
2. To change the courier data table to be sorted by registration date, change the select option in Sort By from Name to Registration Date (yyyy-mm-dd).
3. To search for couriers by name, add a Query String at the top of the url to http://localhost:8000/couriers?search=value.
4. To display the courier data table by level, add a Query String at the top of the url to http://localhost:8000/couriers?level=2.5 for example, if you want to display a courier data table of more than 1 level, you need to add a comma from the Query String level value.
5. Click the Couriers CRUD button to go to the Couriers CRUD page to see the data table of all couriers displayed exactly the same as the Courier Index Page from `CouriersComponent` with the render function as the show controller.
6. Click the Add New Courier button to display the modal form for inputting new courier data with appropriate and complete validation on each input field. When after filling in all the input fields, click the Add Courier button to add new courier data from `CouriersComponent` with the storeCourierData function as the store controller.
7. Click the View button in the Actions section to see the courier data details.
8. Click the Edit button in the Actions section to display the modal form for editing courier data with appropriate and complete validation on each input field. When after filling in all the input fields, click the Edit Courier button to change the courier data from `CouriersComponent` with the editCourierData function as the update controller.
9. Click the Delete button in the Actions section to display the modal confirmation to delete courier data. Click the Yes button! Delete to agree to delete courier data and click the Cancel button to cancel deleting courier data from `CouriersComponent` with the deleteCourierData function as the destroy controller.
10. Click the Courier Index button to return to the Courier Index Page.
