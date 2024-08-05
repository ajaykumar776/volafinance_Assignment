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

## Technology Stack

- **Laravel**: 10.4
- **PHP**: 8.1
- **Tailwind CSS**: For frontend styling
- **REST API**: For API endpoints

## PostMan Collections file Attached in root folder

- Transactions API_Postman_Collection.json

## API Endpoints 

- **Calculate User Closing Balance**: `/balances/{userId}`
  - **Method**: `GET`
  - **Description**: Calculates the user's closing balance including daily closing balances and average balances over different periods.

- **Calculate Last 30 Days Income**: `/income/{userId}`
  - **Method**: `GET`
  - **Description**: Calculates the total income for the last 30 days for the specified user.

- **Calculate Debit Transaction Count**: `/debit-count/{userId}`
  - **Method**: `GET`
  - **Description**: Retrieves the count of debit transactions for the last 30 days for the specified user.

- **Calculate Debit Amount on Weekends**: `/debit-amount-weekend/{userId}`
  - **Method**: `GET`
  - **Description**: Sums up the amount of debit transactions that occurred on weekends for the last 30 days for the specified user.

- **Calculate Income Above Amount 15**: `/income-above-amount_15/{userId}`
  - **Method**: `GET`
  - **Description**: Calculates the total income amounts that are greater than 15 for the specified user.
