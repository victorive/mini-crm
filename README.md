## Mini CRM

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

## Setup instructions

- Clone the repo: [mini-crm](https://github.com/victorive/mini-crm.git)
- Navigate to the project directory eg. `cd project-directory` PS: Replace the project directory with the directory where you cloned the project.
- Open the `.env.example` file in the root of your project directory and copy the contents of the file.
- Create a new file with the name `.env` in the root directory of your project and paste the contents of the file you just copied.
- Connfigure your database credentials inside the `.env` file and save.
- Run `composer install` to install the applications' dependencies.
- Run `php artisan key:generate` to generate the application key.
- Run `php artisan storage:link` to perform symlinking to the public directory
- Run `php artisan migrate --seed` to seed dummy data for testing purposes.
- Finally, run `php artisan serve`.


## Login with the following credentials

Email: `admin@admin.com`
Password: `password`
