# userService-v2
### Running Locally 
#### Mac
 ```
   php artisan serve
   php artisan migrate
   npm run dev
 ```
 (docker container coming soon)
### Commands
#### Generate Random Users:
 ```
   php artisan user:random {--count=}
 ```
 #### Generate Random User:
 ```
   user:create {--first_name=} {--last_name=} {--email=} {--password=} {--user_type=}
 ```
 
