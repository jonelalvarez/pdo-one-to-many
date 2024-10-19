CREATE TABLE customer_tbl (
    customerID INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR (50),
    lastName VARCHAR (50),
    bDate VARCHAR (50),
    address VARCHAR (250),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status INT(1)
);


CREATE TABLE products_tbl (
    productID INT AUTO_INCREMENT PRIMARY KEY,
    productName VARCHAR (50),
    size VARCHAR (10),
    customerID INT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);