##  Tech Stack
* PHP 8+
* Laravel 12
* MySQL
* Laravel Resource API Responses
---

##  Installation
1.  Clone the repository:
    ```bash
    git clone https://github.com/kholy98/home-page-api.git
    cd home-page-api
    ```
2.  Install dependencies:
    ```bash
    composer install
    ```
3.  Copy `.env` file and configure database:
    ```bash
    cp .env.example .env
    ```
4.  Generate application key:
    ```bash
    php artisan key:generate
    ```
5.  Run migrations and seed:
    ```bash
    php artisan migrate --seed
    ```
6.  Start development server:
    ```bash
    php artisan serve
    ```

---

##  Environment Setup
Configure your `.env` file for database :

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=home_page_api
DB_USERNAME=root
DB_PASSWORD=

CACHE_DRIVER=file
```
