📦 Inventory Management System
An open-source, lightweight, and easy-to-use Inventory Management System built with PHP and MySQL. This system helps you efficiently manage product stock, generate invoices, and maintain order management. It's perfect for small to medium businesses needing a simple solution to manage their inventory and sales operations.

🚀 Features
Invoice Generation: Automatically generate invoices for orders and download them in PDF format.
Order Management: Effortlessly manage and track customer orders.
Product Management: Add, update, and track product inventory with ease.
Report Management: Generate detailed reports on sales and inventory.
User-Specific Sales Reports: View and analyze sales data for each user.

🛠️ Requirements
To run this project, you'll need:

PHP 7.x or higher
MySQL 5.x or higher
Apache or Nginx server
Composer (optional, for dependency management)

📥 Installation
Follow these steps to get started with the project:

Clone the repository:

git clone https://github.com/yourusername/inventory-management-system.git

Import the MySQL Database:

Navigate to your MySQL dashboard (e.g., phpMyAdmin) and import the provided SQL file (inventory.sql) to create the necessary tables and schema.

Configure the Database:

Update the db_connection.php file with your database credentials:

<?php
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "inventory_db";
?>

Run the Application:

Open your browser and visit http://localhost/<foldername>/index.php.

📸 Project Snapshots
Here are some snapshots to give you a quick look at the project:

Dashboard: Overview of the inventory system with key metrics and recent activity.
![dashboard](image.png)

Product Management: Easily add, update, and track products in your inventory.
![products/](image-1.png)

Brand Management: Easily add, update, and track products in your inventory.
![brands/](image-2.png)

Order Management: View, edit, and process customer orders efficiently.
![orders/](image-3.png)

Invoice Generation: Generate and download invoices in PDF format with a click.
![pdf-invoice/](image-4.png)


💡 Usage
Add Products: Manage your product inventory by adding new products with attributes such as name, SKU, price, and quantity.
Process Orders: Handle customer orders, track their status, and update order details.

Generate Invoices: Generate invoices for orders, ready to download in PDF format.

View Reports: Get insights into your sales and inventory with customizable reports.

📄 License
This project is licensed under the MIT License. You are free to modify and distribute the code as per the license.

📞 Support
If you have any issues or want to contribute, feel free to open an issue or submit a pull request on GitHub. You can also reach me at harshita.lalawat99@example.com.