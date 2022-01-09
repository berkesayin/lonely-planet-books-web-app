CREATE TABLE europebooks_new (
                                 id INT(6)  AUTO_INCREMENT PRIMARY KEY,
                                 name VARCHAR(50) NOT NULL,
                                 detail TEXT NOT NULL,
                                 price VARCHAR(20),
                                 kindOfBook VARCHAR(50),
                                 publisher VARCHAR(100),
                                 aktif INT,
                                 CONSTRAINT UC_BOOK UNIQUE (name,kindOfBook)
)

