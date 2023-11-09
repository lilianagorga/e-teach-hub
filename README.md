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

* Create your feature branch: 

  ```bash
  git checkout -b feature-name
  ```

* Commit your changes: 

  ```bash
  git commit -m 'Description of the feature'
  ```

* Push to the branch: 

  ```bash
  git push origin feature-name
  ````

* Open a pull request.

## Follow these steps to try the REST API in local


1. Run the following command to clone the repository:

    ```bash
    git clone https://github.com/lilianagorga/e-teach-hub.git
    ```

2. Once the repository is cloned, navigate to the project folder:

    ```bash
    cd e-teach-hub
    ```
3. Install composer dependencies:

   ```bash
   composer install
   ```

4. Install NPM Dependencies:

    ```bash
    npm install
    ```
5. Run Vite to build the frontend assets:
    
    ```bash
    npm run dev
    ```

   * This will compile and optimize the frontend assets. 

6. Database Setup:

   * Create an empty database on your local MySQL server using tools such as MySQL Workbench, phpMyAdmin.
   * Run the database migrations with :
   
    ```bash
    php artisan migrate
    ```
   * Seed the database with test data using :
   
    ```bash
    php artisan db:seed
    ```

7. Database Setup for testing: 

   * If you're setting up the testing database, make sure to configure the `.env.testing` file with the appropriate database settings. Then, follow these steps:

   * Run the database migrations for testing using:
    
    ```bash
    php artisan migrate --env=testing
    ```
    
   * Seed the testing database with test data using:
    
    ```bash
    php artisan db:seed --env=testing
    ```

8. Start the local development server:
  
    ```bash
    php artisan serve
    ```

9. You are now ready to use the e-teach-hub API on your local environment: http://localhost:8000

## Usage 
* Recommended tool to try the requests. [Postman](https://www.postman.com/)

* REST API endpoints:

### Routes API

-   **RESOURCE** /api/subjects
-   **RESOURCE** /api/courses
-   **POST** /api/user/register
-   **POST** /api/user/login


### Routes Web

-   **GET** /
-   **GET** /subjects
-   **GET** /courses
-   **GET** /subjects/{subject}
-   **GET** /subjects/{subject}/courses
-   **GET** /courses/{course}
-   **GET** /register
-   **GET** /login
-   **POST** /logout
-   **POST** /users
-   **POST** /users/authenticate

> **Notes**
> Check on the headers tab **Content/type** application/json.
> Add a new header **Accept** application/json.


### Filtering Courses

* The `courses` API route supports filtering based on different parameters. To filter courses, you can make a GET request
to the `/courses` endpoint with the following query parameters:

  * `subject`: Filter courses by subject. For example:
    ```plaintext
    /courses?subject=development
  
  * name: Filter courses by name. For example: 
    ```plaintext
    /courses?name=frontend
  * seats: Filter courses by the number of seats available. For example:
    ```plaintext
    /courses?seats=20
  * You can also combine multiple filters in a single request. For instance:
    ```plaintext
    /courses?subject=development&name=frontend&seats=20
    
* This will return a JSON response with the filtered courses that match the specified criteria.


## License

This API is licensed under the [MIT license](https://opensource.org/licenses/MIT).
