# laravel_world_cities_countries
All cities and countries data for Laravel (include Middle East)

**Country**:
- English Name
- Arabic Name
- French Name
- Country Code
- Country Dialing Code (Phone Number Code)

**City**: 
- Country ID
- English Name
- Arabic Name
- French Name
- Country Code

**Installation**:

1- add migrations files to your project migrations directory.

2- add seeders file to your project seeder directory.

3- then run 

```
php artisan db:seed --class=CitySeeder
php artisan db:seed --class=CountrySeeder
```
if you find this helpfull don't forget to star the repositery


