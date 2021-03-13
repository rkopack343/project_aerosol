## Project Aerosol

Create a website that allows user to overlay a picture of an object on top of a picture of a cloud. People find cool things in clouds all the time so why not let them take pictures of what they see and show the world?


## Design Goals

1. Create a website that allows a user to specify two pictures, one background and one foreground.
	- Both of these pictures are meant to be uploaded elsewhere and linked here. No storing of images for this website, let CDNs handle that.
1. The background picture is completely static and is meant to be the cloud picture and should be the larger of the two.
1. The foreground picture has translation, rotation, and transparency settings.
	- Essentially the user 'overlays' the image they want on the cloud image in the manner they want.
1. All of the above happens in the GUI using Javascript and React.
	- I'm going to have to learn this.
	- NPM isn't playing nice and I really don't know what I should do.
1. The user is given some kind of code, or passphrase, that uniquely identifies the settings they have chosen.
	- Ideally this would _not_ involve a database as I don't like the idea of storing hyperlinks for many reasons, but a base64 code of the above settings could get exceedingly long.
	- A database storage, however, would get me more experience and knowledge so let's brush aside those concerns for now.
1. The user can go to a different part of the website, input the code, and receive the unique combination they (or somebody else) saved!


## Stretch Goals


## TODO

1. Figure out how to interface with a database using Laravel
1. Right now the database schema has everything saved in a jsonblob, maybe a more direct schema with a DAO would be better?
	- I think this is the better path to take, after all.
1. Do a test run with given parameters to make sure the backend logic works correctly
1. Figure out how to get pictures to display, move, and rotate from user input in javascript
	- oh I might need scaling here so if I do it will be a good test of migration (database or otherwise)
1. Figure out how to send all of that data floating in javascript to the API
1. ???
1. Profit


## Aspirations



## Notes to Self

1. Don't try to do things outside of the laravel environment suite. Just go with the flow and do it how it wants you to do it.
1. php artisan migrate
	- Runs migration on the database. Multiple commands packed in here like migrate:rollback to roll everything back to try again.
1. php artisan make:migration <description>
	- Creats a database migration script and tries to guess what you're doing.
	- Database migration scripts have an up() (forward) and down() (reverse) that need to be filled out. Create and Destroy!
	- https://laravel.com/docs/8.x/migrations
1. php artisan db:seed
	- Seeds the database by looking at \database\seeders\DataBaseSeeder.php and calling the run() function. This allows you to populate a database!
	- https://laravel.com/docs/8.x/seeding