-- Create Categories table
CREATE TABLE Categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(255) NOT NULL
);

-- Create SubCategories table
CREATE TABLE SubCategories (
    sub_category_id INT AUTO_INCREMENT PRIMARY KEY,
    sub_category_name VARCHAR(255) NOT NULL,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES Categories(category_id)
);

-- Create PublicTarget table
CREATE TABLE PublicTarget (
    public_target_id INT AUTO_INCREMENT PRIMARY KEY,
    public_target_name VARCHAR(255) NOT NULL
);

-- Create ProductAttributes table
CREATE TABLE ProductAttributes (
    attribute_id INT AUTO_INCREMENT PRIMARY KEY,
    attribute_name VARCHAR(255) NOT NULL
);

-- Create Products table
CREATE TABLE Products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2),
    category_id INT,
    sub_category_id INT,
    public_target_id INT,
    FOREIGN KEY (category_id) REFERENCES Categories(category_id),
    FOREIGN KEY (sub_category_id) REFERENCES SubCategories(sub_category_id),
    FOREIGN KEY (public_target_id) REFERENCES PublicTarget(public_target_id)
);

-- Create ProductAttributeValues table
CREATE TABLE ProductAttributeValues (
    product_attribute_value_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    attribute_id INT,
    attribute_value VARCHAR(255),
    FOREIGN KEY (product_id) REFERENCES Products(product_id),
    FOREIGN KEY (attribute_id) REFERENCES ProductAttributes(attribute_id)
);