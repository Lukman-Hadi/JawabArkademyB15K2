CREATE TABLE Category(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200)
)ENGINE=InnoDB;

CREATE TABLE Cashier(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200)
)ENGINE=InnoDB;

CREATE TABLE Product(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(200),
    price INT,
    id_category INT,
    FOREIGN KEY (id_category) REFERENCES Category(id),
    id_cashier INT,
    FOREIGN KEY (id_cashier) REFERENCES Cashier(id)
)ENGINE=InnoDB;

INSERT INTO Category(nama) VALUES ('Food');
INSERT INTO Category(nama) VALUES ('Drink');

INSERT INTO Cashier(nama) VALUES ('Pevita Pearce');
INSERT INTO Cashier(nama) VALUES ('Raisa Andriana');
INSERT INTO Cashier(nama) VALUES ('Lukman Hadi');

INSERT INTO Product(nama, price, id_category, id_cashier) VALUES ('Latte','10000','2','1');
INSERT INTO Product(nama, price, id_category, id_cashier) VALUES ('Cake','20000','1','2');
INSERT INTO Product(nama, price, id_category, id_cashier) VALUES ('Apem','45000','1','3');