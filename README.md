# userService-v2
## About
This is a vueJS Laravel Application. 
### Main Features
#### User Caching
View a list of users by categories. The users are retrieved at run time when a category is selected. VueJs uses axios to make API calls to the backend of laravel. These uses are cached using file system currently. The user has the ability to refresh the cache.

#### Caffeine Calculator
Allows a user to select from various drinks with x amount of caffeine in it. This feature calculates if a user can safely consume the drink. In the future I will set this up to make API calls to the backend as well.
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
 
