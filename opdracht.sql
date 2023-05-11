Create database supermarkt;

USE Store;

CREATE TABLE Products (
    product_id INT PRIMARY KEY,
    product_naam VARCHAR(255),
    prijs_per_stuk DECIMAL(10,2),
    omschrijving TEXT
);