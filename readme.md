

# Nearby Shops

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

## Features
- As a User, I can sign up using my email & password
- As a User, I can sign in using my email & password
- As a User, I can display the list of shops sorted by distance
- As a User, I can like a shop, so it can be added to my preferred shops
  - Acceptance criteria: liked shops shouldn’t be displayed on the main page
- As a User, I can dislike a shop, so it won’t be displayed within “Nearby Shops” list during the next 2 hours
- As a User, I can display the list of preferred shops
- As a User, I can remove a shop from my preferred shops list

### Used Technologies

- PHP 
  - Backend : Laravel 5
  - Frontend : Angular
  - Database : MySQL

### Installing

- Install XAMPP with PHP7.0.
- Install Composer.
- Then excute those commands :
  - composer update

### Prerequisites

- You need to :
  - Create database nearby_shops
  - add those in .env file : 
    - DB_DATABASE=nearby_shops
    - DB_USERNAME=root
  - (NOTICE : After Creating the database you should execute this command : php artisan migrate)
```
  - Then insert some data like :
```
INSERT INTO t_shop(id,shop_name,shop_description,shop_photo,creation_date,lat,lng) 
VALUES
(1,'GALAXY SHOP',"Magasin d'appareil de fitness",'pic1.png',NOW(),33.9915249,-6.870811),
(2,'Animal Shop','magasin','pic2.png',NOW(),34.0201814,-6.8250954),
(3,'Crea Corner','magasin','pic3.png',NOW(),34.0140097,-6.8289578),
(4,'ABIOKIM Shop','magasin de store et de rideaux','pic4.png',NOW(),34.0041111,-6.8502867),
(5,'Eglo Concept Shop','Magasin de luminaires','pic5.png',NOW(),33.9884604,-6.8279707);
```


Finally put the project in htdocs and launch apache server from xampp control panel.
## Thank you

### Bonus(Quik View) : https://media.giphy.com/media/3ohc1dmLj447g4BH20/giphy.gif
