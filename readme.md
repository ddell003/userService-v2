# userService-v2 - a laravel web application

https://laravel.com/docs/5.7/installation

## Set up - Backend

1. Once you clone down the project look to see if you have .env if you dont run 
`cp .env-example .env`
2. run composer install
3. run php artian migrate
4. php artisan key:generate
5. if you have mac you can run `php artisan serve`
6. Create Users: in your terminal run:
```
php artisan user:create --first_name=Parker --last_name=Dell --email=parkerdell94@gmail.com --password=password --user_type=1
```
7. Create Random Users:
```
php artisan user:random --count=10

```
## Set up - Frontend

1. run ```npm install```
2. Compiling javascript: 
* Local: ```npm run dev```
* if making a lot of style changes and need to see live update: ```npm run watch```
* production: ```npm run production```
    