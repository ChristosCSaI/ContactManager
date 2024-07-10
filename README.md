# Contact Manager

A simple contact management application built with Laravel.

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/ChristosCSaI/ContactManager.git
    cd ContactManager
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Set up your environment variables:**

    Copy the `.env.example` file to `.env` and update the database credentials:

    ```bash
    cp .env.example .env
    ```

    Open the `.env` file and update the following lines to match your database configuration:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

4. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run the database migrations and seed the database:**

    ```bash
    php artisan migrate:fresh --seed
    ```

6. **Serve the application:**

    ```bash
    php artisan serve
    ```

    Your application should now be running at `http://127.0.0.1:8000`.

## Running Tests

To run the tests, use the following command:

```bash
php artisan test
