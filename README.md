# ScandiwebTest - Product Management System

A modern PHP-based product management application with dynamic frontend capabilities, built using object-oriented programming principles and featuring a responsive web interface.

## 📋 Project Overview

This project is a web-based product management system that allows users to manage different types of products (Books, DVDs, and Furniture) with specific attributes. The application demonstrates clean OOP design patterns, database integration, and modern web development practices.

## 🏗️ Architecture

### Backend (PHP)

- **Object-Oriented Design**: Implements inheritance with a base `Product` class
- **Database Integration**: MySQL database connectivity using PDO
- **Validation System**: Server-side validation for data integrity
- **Product Types**: Extensible system supporting Books, DVDs, and Furniture

### Frontend (JavaScript/HTML/CSS)

- **Dynamic UI**: jQuery-powered interactive interface
- **Bootstrap Framework**: Responsive design with Bootstrap 5.1.3
- **Form Management**: Dynamic form generation based on product types
- **Client-side Validation**: Real-time form validation and error handling

## 📁 Project Structure

```text
ScandiwebTest/
├── Junior_Tets/
│   ├── css/                    # Stylesheets and design assets
│   ├── js/                     # JavaScript functionality
│   │   ├── jquery-3.6.0.js     # jQuery library
│   │   ├── product-add.js       # Add product functionality
│   │   └── product-list.js      # Product listing functionality
│   ├── php/                    # Backend PHP classes
│   │   ├── Database.php         # Database connection handler
│   │   ├── ProductValidation.php # Validation logic
│   │   ├── Resolver.php         # Request routing
│   │   ├── Validator.php        # Data validation
│   │   ├── Warehouse.php        # Product management
│   │   ├── classLoader.php      # Auto-loading classes
│   │   └── products/           # Product class hierarchy
│   │       ├── Product.php      # Base product class
│   │       ├── Book.php         # Book product type
│   │       ├── Dvd.php          # DVD product type
│   │       └── Furniture.php    # Furniture product type
│   ├── product_list.html       # Product listing page
│   └── product_add.html        # Add new product page
└── README.md                   # This file
```

## 🚀 Features

### Product Management

- **Multiple Product Types**: Support for Books, DVDs, and Furniture
- **Dynamic Attributes**: Each product type has specific attributes
- **CRUD Operations**: Create, read, update, and delete products
- **SKU Management**: Unique identifier system for products

### User Interface

- **Responsive Design**: Mobile-friendly interface using Bootstrap
- **Dynamic Forms**: Form fields change based on selected product type
- **Real-time Validation**: Immediate feedback on form inputs
- **Interactive Elements**: Smooth user experience with jQuery

### Technical Features

- **OOP Architecture**: Clean inheritance-based design
- **Database Integration**: MySQL with PDO for secure operations
- **Error Handling**: Comprehensive validation and error management
- **Auto-loading**: Efficient class loading system

## 🛠️ Technology Stack

### Backend

- **PHP**: Server-side programming language
- **MySQL**: Database management system
- **PDO**: Database abstraction layer

### Frontend

- **HTML5**: Semantic markup structure
- **CSS3**: Styling and layout
- **Bootstrap 5.1.3**: CSS framework for responsive design
- **jQuery 3.6.0**: JavaScript library for DOM manipulation

## 📦 Product Types

### Books

- **Base Attributes**: SKU, Name, Price
- **Specific Attributes**: Weight, dimensions, or other book-specific properties

### DVDs

- **Base Attributes**: SKU, Name, Price
- **Specific Attributes**: Size, duration, or other media-specific properties

### Furniture

- **Base Attributes**: SKU, Name, Price
- **Specific Attributes**: Dimensions, material, or other furniture-specific properties

## 🔧 Setup Instructions

### Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)

### Installation

1. **Clone the repository**

   ```bash
   git clone [repository-url]
   cd ScandiwebTest
   ```

2. **Database Setup**
   - Create a MySQL database named `products`
   - Update database credentials in `php/Database.php`
   - Run database migration scripts (if available)

3. **Web Server Configuration**
   - Point document root to the `Junior_Tets` directory
   - Ensure PHP extensions are enabled (PDO, MySQL)

4. **File Permissions**

   ```bash
   chmod 755 Junior_Tets/
   chmod 644 Junior_Tets/*.html
   chmod 644 Junior_Tets/php/*.php
   ```

## 💡 Usage

### Adding Products

1. Navigate to `product_add.html`
2. Fill in the basic product information (SKU, Name, Price)
3. Select the product type from the dropdown
4. Fill in type-specific attributes
5. Click "Save" to add the product

### Viewing Products

1. Navigate to `product_list.html`
2. Browse the list of all products
3. Use filtering or search functionality (if implemented)

### Product Data Management

- Each product has a unique SKU for identification
- Products can be categorized by type
- Validation ensures data integrity

## 🏛️ Architecture Patterns

### Object-Oriented Design

- **Inheritance**: `Book`, `Dvd`, and `Furniture` extend base `Product` class
- **Encapsulation**: Private/protected properties with public getter/setter methods
- **Polymorphism**: Different product types can be handled uniformly

### Database Pattern

- **PDO Usage**: Secure database operations with prepared statements
- **Connection Management**: Centralized database connection handling
- **Error Handling**: Proper exception handling for database operations

### Frontend Patterns

- **Progressive Enhancement**: Core functionality works without JavaScript
- **Event-Driven Programming**: jQuery event handlers for user interactions
- **Modular JavaScript**: Separate files for different functionality

## 🔒 Security Features

- **Input Validation**: Server-side and client-side validation
- **SQL Injection Prevention**: PDO prepared statements
- **Data Sanitization**: Proper data cleaning before processing
- **Error Handling**: Graceful error management without exposing system details

## 🚧 Development Guidelines

### PHP Standards

- Follow PSR-4 autoloading standards
- Use type hints for method parameters and return types
- Implement proper error handling and logging

### JavaScript Standards

- Use modern ES6+ features where appropriate
- Maintain separation of concerns
- Implement proper event handling

### Database Standards

- Use prepared statements for all database operations
- Implement proper indexing for performance
- Follow normalization principles

## 📈 Future Enhancements

- **REST API**: Create API endpoints for mobile app integration
- **Advanced Search**: Implement filtering and search functionality
- **User Authentication**: Add user management and permissions
- **Inventory Management**: Track stock levels and availability
- **Reporting**: Generate reports on product sales and inventory

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/new-feature`)
3. Commit your changes (`git commit -am 'Add new feature'`)
4. Push to the branch (`git push origin feature/new-feature`)
5. Create a Pull Request

## 📄 License

This project is part of a technical assessment and is available for educational purposes.

---

**Note**: This is a demonstration project showcasing PHP OOP principles, database integration, and modern web development practices.
