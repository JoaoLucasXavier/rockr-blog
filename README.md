# Rockr Blog

### 1. Challenge (API)
Build an API for a blog page that provides the following:

1. A news feed that shows the articles.
2. A way to store and get blog contacts (contact form).
3. You can use any backend language or framework to solve this challenge.


### 2. Challenge (Frontend Interface)
Create a Web interface for the API you created. Must have the following features:

1. Create the interface using any technology of your preference. (TIP: component-oriented frameworks/libs helps accelerate the development process)
2. Make it responsive using your best judgement.
3. Create a page to show the published articles.
4. Implements a way to view a single article in the blog.
5. Create a page with a contact form, where the user can send their **name**, **email**, **phone**, and **message**.


### Screenshots

1. Posts
   ![](https://github.com/JoaoLucasXavier/user-authentication-laravel-app/blob/master/public/image/readme/02-novoUsuario.png)

2. Single post
   ![](https://github.com/JoaoLucasXavier/user-authentication-laravel-app/blob/master/public/image/readme/02-novoUsuario.png)

3. Contact
   ![](https://github.com/JoaoLucasXavier/user-authentication-laravel-app/blob/master/public/image/readme/02-novoUsuario.png)
   

### Setting
Edit  `.env` file:

`DB_CONNECTION=mysql`

`DB_HOST=db`

`DB_PORT=3306`

`DB_DATABASE=rockr_blog`

`DB_USERNAME=root`

`DB_PASSWORD=root`


### Run API (Docker)
Run the following commands from the `root` directory.

`docker-compose up -d --build`

`docker exec -it rockr-blog_app_1 bash`

`composer install`

`php artisan migrate`

`php artisan key:generate`

`php artisan db:seed --class=PostSeeder`

`chmod 777 -R *`


### Run Frontend 

Run the following commands in the `frontend` directory.


`npm install`

`npm run serve`

`URI: http://localhost:8081/`


### List of third-party libraries used

1. Laravel
   - This project did not demand much technically speaking of the backend. Even more using an incredible framework like Laravel. Simply perfect!
2. Mysql
    - First database I used. Fast, Safe and Scalable!
3. Vue
    - Simply my favorite frontend library. I chose this because I have more familiarity to work on a daily basis.
4. axios
    - Used to consume the Laravel API in Vuejs.
5. Bootstrap
    - Used for styling the contact form.
6. Sass
    - For allowing to increase the functionality of the CSS with the use of variables, imports, nested classes among others.
7. Fontawesome
    - Provides some necessary icons for the application.
8. Docker
    - For making it easy to run the application without having to install an apache, php, mysql server on the local machine.




