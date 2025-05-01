## Project Setup

Follow these steps to set up and run the project locally:

**Prerequisites**

- PHP
- Composer ([Get Composer](https://getcomposer.org/))
- MySQL or MariaDB

1. **Clone the repository**

   git clone <your-repo-url>
   cd <repo-folder>

2. **Install dependencies**

    - install composer

   composer install

3. **Database Setup**

   1. **Create a database and user**

    - Replace your_db_name, your_db_user, and your_db_password with your desired database name, username, and password.

      Example for MySQL/MariaDB:
      
      CREATE DATABASE your_db_name;
      CREATE USER 'your_db_user'@'localhost' IDENTIFIED BY 'your_db_password';
      GRANT ALL PRIVILEGES ON your_db_name.* TO 'your_db_user'@'localhost';


   2. **Import the database schema**

    - Information for seeding the database is in the schema.sql file.

    - run this SQL code:
      mysql -u your_db_user -p your_db_name < schema.sql

4. **Set up environment variables**

   - Copy the .env.example file to create your own `.env` file:
   - replace 
        DB_DATABASE=
        DB_USERNAME=
        DB_PASSWORD=
    with your own information 

5. **Run the project**
   - Make sure your web server (e.g., Apache, Nginx, or PHP's built-in server) is running and points to the project directory.
   - Open `index.php` in your browser to view the site.

