Project Structure
drupal-7.100/ - Contains the Drupal 7 core, contributed modules, themes, and custom files.
database.sql - MySQL database dump for setting up the project locally.
🚀 How to Set Up the Project Locally
1️⃣ Clone the Repository

git clone https://github.com/your-username/Compuco-Project.git
cd Compuco-Project
2️⃣ Set Up a Local Server

Use MAMP, XAMPP, or LAMP to run the Drupal site.

3️⃣ Import the Database

Run the following command inside MySQL:

mysql -u root -p drupal7 < database.sql
(Replace drupal7 with your actual database name if different.)

4️⃣ Configure settings.php

Copy sites/default/default.settings.php to sites/default/settings.php.
Update database credentials:
$databases['default']['default'] = array (
  'driver' => 'mysql',
  'database' => 'drupal7',
  'username' => 'root',
  'password' => 'yourpassword',
  'host' => 'localhost',
  'prefix' => '',
);
5️⃣ Enable Required Modules

drush en module_name -y
(If using Drush for faster setup.)

6️⃣ Run the Site

Start MAMP/XAMPP/LAMP.
Access Drupal at http://localhost/drupal-7.100/.
