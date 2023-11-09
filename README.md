# Overview
e-Teach-Hub is a full-stack API project designed as a part of my portfolio. This API has been developed using the Laravel framework and encompasses two distinct subjects, "Yoga" and "Development." Each subject comprises two courses. Within the "Development" branch, you'll find the "Frontend" and "Backend" courses, while the "Yoga" branch features "Hatha Yoga" and "Ashtanga Yoga" courses.

In the backend, I adopted a Test-Driven Development (TDD) approach, creating feature tests to ensure the availability of CRUD operations for subjects, courses, and users. All backend routes are of the "api" type and utilize the "Sanctum" package for authentication. It's important to note that there are two .env files, one for the local environment and another for the testing environment, .env.testing.

On the frontend, the routes are of the "web" type. I utilized Vite and Tailwind CSS to craft the frontend, providing a highly efficient solution for user interface development.

This project has been designed to offer a welcoming and stimulating learning environment where web development enthusiasts can enhance their skills and rejuvenate through yoga sessions. Our aim is to provide up-to-date training on the latest industry trends, offering a range of subjects to choose from.

Please feel free to let me know if any further refinements or adjustments are needed.

## Technologies Used

* Laravel
* laravel/sanctum
* Vite
* Tailwindcss
* postcss
* laravel-vite-plugin
* Alpinejs

## Contributing

We welcome contributions to make this app even better. If you'd like to contribute, follow these steps:

* Fork the project.
* Create your feature branch: `git checkout -b feature-name`.
* Commit your changes: `git commit -m 'Description of the feature'`.
* Push to the branch: `git push origin feature-name`.
* Open a pull request.

## Follow these steps to try the REST API in local

### Run the following command to clone the repository:

  `git clone https://github.com/lilianagorga/e-teach-hub.git`

### Install Dependencies 

* Once the repository is cloned, navigate to the project folder: `cd e-teach-hub`

  `composer install`
  `npm install`

* Run Vite to build the frontend assets: `npm run dev`
  * This will compile and optimize the frontend assets. 

### Database Setup

* Create an empty database on your local MySQL server using tools such as MySQL Workbench, phpMyAdmin.
* Run the database migrations with `php artisan migrate`.
* Seed the database with test data using `php artisan db:seed`.

#### Testing Database Setup (For `.env.testing`)

If you're setting up the testing database, make sure to configure the `.env.testing` file with the appropriate database settings. Then, follow these steps:

* Run the database migrations for testing using `php artisan migrate --env=testing`.
* Seed the testing database with test data using `php artisan db:seed --env=testing`.

* You are now ready to use the e-teach-hub API on your local environment.


## License

This API is licensed under the [MIT license](https://opensource.org/licenses/MIT).
