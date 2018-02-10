--- To Download the project

git clone https://github.com/aalejandromr/sistema.git skyfleeter

then do the following steps:

1- composer install

2- copy .env.example to .env on the root folder, and place your server settings

3- php artisan key:generate

4- php artisan migrate

5- then, run the dump.sql script into your MySql server

everything should be ready to run the internal server

-- To Run Server

	--- php artisan serve

--- To Work on this project

	-- git checkout [yourname]
	AND BEFORE MAKING YOUR CHANGES DO
		-- git checkout master
		-- git pull origin master
		-- git checkout [yourname]
		-- git merge master
		then
	-- Make your changes, and
		--- git add .
		--- git commit -m {Commit Message}
		--- git push origin [yourname]
		--- git checkout master
		--- git merge [yourname]
		--- git push origin master

