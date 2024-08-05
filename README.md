# Laravel Landing Page and Transactions API

## Installation

1. Clone the repository:
    ```bash
    git clone <your-repo-url>
    cd <repo-directory>
    ```

2. Install dependencies:
    ```bash
    composer install
    npm install
    npm run dev
    ```

3. Set up environment variables:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Run migrations and seeders:
    ```bash
    php artisan migrate
    php artisan db:seed --class=TransactionsTableSeeder
    ```

## API Endpoints

- **Calculate User Closing Balance**: `/api/transactions/closing-balance/{userId}`
- **Calculate 90 Days Average Closing Balance**: `/api/transactions/90-days-closing-balance/{userId}`
- **Calculate Last 30 Days Income**: `/api/transactions/30-days-income/{userId}`

## License

This project is licensed under the MIT License.
