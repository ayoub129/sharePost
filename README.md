# SharePost Application

SharePost is a web application developed using AyoubMvc, a custom PHP framework implementing the Model-View-Controller (MVC) architecture. It allows users to authenticate, create, edit, and delete posts.

## Getting Started
1- Clone the Project:

```bash
git clone https://github.com/ayoub129/sharePost
```

2- Set Up the Database:
- Create a new database in PhpMyAdmin.
- Import the SQL schema from the sharepost.sql file provided in the project to set up the necessary tables.

3- Configure Database Connection:
- Open the config/config.php file.
- Update the database connection details with your database credentials.

```php
define('DB_HOST', 'your_host');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_NAME', 'your_database_name');
```

4- Configure Web Server:
- Configure your web server to point to the application's public directory.

5- Access the Application:
- Open the application in your web browser.

## Usage
#### 1- User Authentication:
- Register a new account or log in with an existing one.
#### 2- Post Management:
- Create new posts: Click on "New Post" to create a new post.
- Edit existing posts: Click on "Edit" next to your posts to modify them.
- Delete posts: Click on "Delete" next to your posts to remove them.

## License
This project is licensed under the MIT License.

## Contact

Email: ayoub@berouijil.com
Website: https://berouijil.com