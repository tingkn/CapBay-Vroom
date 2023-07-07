# CapBay-Vroom
 
## Setup Instructions

1. Clone the repository to your local machine:
```
git clone https://github.com/tingkn/CapBay-Vroom.git
```
  
2. Navigate to the project directory:
```
cd capbay-vroom
```
  
3. Install the project dependencies using Composer:
```
Composer install
```
  
4. Create a new `.env` file by duplicating the `.env.example` file:
```
cp .env.example .env
```
  
5. Generate a new application key:
```
php artisan key:generate
```
  
6. Configure the database connection in the `.env` file. Set the appropriate values for the following variables:  
DB_CONNECTION=mysql <br>
DB_HOST=your-database-host <br>
DB_PORT=your-database-port <br>
DB_DATABASE=your-database-name <br>
DB_USERNAME=your-database-username  
DB_PASSWORD=your-database-password
  
7. Run the database migrations to create the necessary tables:
```
php artisan migrate
```
  
8. Run the database seeder to initiate the database seeding process:
```
php artisan db:seed --class=RegistrationTableSeeder
```
  
9. Start the development server:
```
php artisan serve
```
  
10. Open your web browser and access the application at [http://127.0.0.1:8000/](http://127.0.0.1:8000/)
