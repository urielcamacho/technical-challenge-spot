<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Technical Challenge For Backend Developer Position

This project is maded for a request for Backend Developer position

First I downloaded the excel file to analyze its structure, then I proceeded to
create the migrations. I created a seeder to upload the excel file located in public folder
to the DB. I used resources to display the requested zip_code, also I created a route of type get
in api.php (/zip-code/{zip_code}) and I maded the binding to the model in RouteServiceProvider file

I finally deployed the app on Heroku [click here to see an example](https://desolate-earth-55245.herokuapp.com/api/zip-code/25300)

### What I did in this project?

- [Zip code api working at /api/zip-code/{zip_code}].
- [Resources used to create send the response at this endpoint].
- [Models: ZipCode, FederalEntity, Settlement and Municipality].
- [Upload from .xls using maatwebsite/excel package].
- [Unit testing for the endpoint for successful and failed responses].
- [PSR was used].

### Whow to run the project?

- [download the repo with git clone]
- [set the .env variables]
- [run `php artisan migrate`]
- [run seeders with `php artisan db:seed`]

### My Info

- **[Name: Uriel Aramis Camacho Hernández]**
- **[Birth date: 25/04/1995]**
- **[Address: Cuautlancingo, Puebla, 72700]**
- **[Phone: +52 221 228 7141]**

- **[CV](https://drive.google.com/file/d/1uC8S05V6ufom_JbOLKLSJiKNAatMKQlT/view?usp=sharing)**

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
