# StackCore - B2B E-Commerce Platform

A modern, full-featured B2B e-commerce platform built with PHP, MySQL, and vanilla JavaScript. Designed for wholesale and business-to-business transactions with advanced features like discount codes, cart management, and admin dashboard.

![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue)
![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-orange)
![License](https://img.shields.io/badge/license-MIT-green)

## 🚀 Features

### Customer Features
- **Product Catalog**: Browse products with categories, search, and filters
- **Shopping Cart**: Add, update, and remove items with real-time updates
- **Favorites**: Save products for later viewing
- **Promotions**: Apply discount codes at checkout
- **User Authentication**: Secure login and registration system
- **Order Management**: Track orders and view order history
- **Responsive Design**: Mobile-friendly interface

### Admin Features
- **Dashboard**: Overview of sales, orders, and statistics
- **Product Management**: CRUD operations for products, categories, and media
- **Order Management**: View and manage customer orders
- **Customer Management**: View registered customers
- **Promotions**: Create and manage discount codes
- **Category Management**: Organize products into categories

## 🛠️ Tech Stack

- **Backend**: PHP 7.4+
- **Database**: MySQL 5.7+
- **Frontend**: HTML5, CSS3, Vanilla JavaScript
- **Icons**: Font Awesome 6.0
- **Server**: Apache (XAMPP recommended for local development)

## 📋 Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache web server
- Composer (optional, for future dependencies)

## 🔧 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/stackcore.git
cd stackcore
```

### 2. Database Setup

1. Create a new MySQL database:
```sql
CREATE DATABASE stackcore_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

2. Import the database schema:
```bash
mysql -u root -p stackcore_db < database/schema.sql
```

3. (Optional) Import sample data:
```bash
mysql -u root -p stackcore_db < database/sample_data.sql
```

### 3. Configuration

1. Copy the example configuration file:
```bash
cp config/Database.example.php config/Database.php
```

2. Edit `config/Database.php` with your database credentials:
```php
private $host = 'localhost';
private $db_name = 'stackcore_db';
private $username = 'your_username';
private $password = 'your_password';
```

### 4. File Permissions

Ensure the following directories are writable:
```bash
chmod 755 images/
chmod 755 uploads/
```

### 5. Start the Server

If using XAMPP:
- Place the project in `htdocs/stackcore`
- Access via `http://localhost/stackcore`

If using PHP built-in server:
```bash
php -S localhost:8000
```

## 📁 Project Structure

```
stackcore/
├── admin/              # Admin panel files
│   ├── dashboard.php
│   ├── products.php
│   ├── orders.php
│   └── ...
├── ajax/               # AJAX endpoints
│   ├── cart_actions.php
│   ├── add_to_cart.php
│   └── ...
├── api/                # API endpoints
│   └── register.php
├── assets/             # Static assets
│   ├── css/
│   └── js/
├── auth/               # Authentication
│   └── userLogin.php
├── classes/            # PHP classes
│   └── User.php
├── config/             # Configuration files
│   └── Database.php
├── helpers/            # Helper functions
│   └── cart_functions.php
├── images/             # Product images
├── index.php           # Homepage
├── store.php           # Product listing
├── cart.php            # Shopping cart
├── checkout.php        # Checkout page
└── README.md
```

## 🔐 Default Admin Credentials

**Important**: Change these credentials after first login!

- **Username**: admin
- **Password**: admin123

Access admin panel at: `http://localhost/stackcore/admin/`

## 🎯 Usage

### For Customers

1. **Browse Products**: Visit the homepage to see featured products
2. **Search & Filter**: Use the search bar and category filters
3. **Add to Cart**: Click "Add to Cart" on any product
4. **Checkout**: Review cart and proceed to checkout
5. **Apply Discount**: Enter discount code at checkout

### For Administrators

1. **Login**: Access `/admin/admin-login.php`
2. **Manage Products**: Add, edit, or delete products
3. **View Orders**: Monitor customer orders
4. **Create Promotions**: Set up discount codes
5. **Manage Categories**: Organize product categories

## 🔄 API Endpoints

### Cart Management
- `GET /api_cart_favorites.php?action=get_counters` - Get cart/favorites count
- `GET /api_cart_favorites.php?action=get_status` - Get product status
- `POST /ajax/add_to_cart.php` - Add item to cart
- `POST /ajax/update_cart_quantity.php` - Update cart quantity
- `POST /ajax/remove_from_cart.php` - Remove from cart

### Products
- `GET /api_products.php?type=all` - Get all products
- `GET /api_products.php?type=promotion` - Get promotional products
- `GET /api_products.php?type=popular` - Get popular products

## 🚧 Development

### Database Schema

Key tables:
- `users` - Customer accounts
- `products` - Product catalog
- `cart_items` - Shopping cart items
- `orders` - Order records
- `favorites` - Saved products
- `discount_codes` - Promotional codes
- `categories` - Product categories

### Code Style

- Follow PSR-12 coding standards
- Use meaningful variable names
- Comment complex logic
- Sanitize all user inputs
- Use prepared statements for database queries

## 🐛 Known Issues

- Session management requires proper PHP session configuration
- File upload size limited by PHP settings
- Some features require JavaScript enabled

## 🔮 Future Enhancements

- [ ] Payment gateway integration
- [ ] Email notifications
- [ ] Advanced analytics dashboard
- [ ] Multi-language support
- [ ] Product reviews and ratings
- [ ] Wishlist functionality
- [ ] Advanced search with filters
- [ ] Export orders to CSV/PDF

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Author

**Your Name**
- GitHub: [@yourusername](https://github.com/yourusername)
- LinkedIn: [Your LinkedIn](https://linkedin.com/in/yourprofile)
- Portfolio: [yourwebsite.com](https://yourwebsite.com)

## 🙏 Acknowledgments

- Font Awesome for icons
- PHP community for excellent documentation
- All contributors who help improve this project

## 📧 Contact

For questions or support, please open an issue or contact [your.email@example.com](mailto:your.email@example.com)

---

**Note**: This is a portfolio project demonstrating full-stack web development skills with PHP and MySQL. It showcases CRUD operations, authentication, session management, and modern web development practices.
