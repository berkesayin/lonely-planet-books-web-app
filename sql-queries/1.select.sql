-- The SELECT statement is used to select data from a database.
-- The data returned is stored in a result table, called the result-set.
-- * means all columns

-- All members of customersinfo table
SELECT * FROM customersinfo

/*Yani veri tabanýnda bir deðiþiklik yapmayacaðým, olan veriden veriyi benim istediðim þartlarda
  bana ver demek.*/


-- Sadece name ve email sütunlarýný getir:
SELECT name, email FROM customersinfo


-- Sütunlara farklý isimle çaðýrarak getir. (Alias)
SELECT name as isim , email as mail FROM customersinfo


-- Sütunlara farklý isimle çaðýrarak getir. (Alias) (as kullanmadan) (ayný iþlem)
SELECT name isim , email mail FROM customersinfo


-- Products tablosundan ProductId ve ProductName sütununu getir. (Farklý yol)
SELECT c.name ,c.surname,c.email FROM customersinfo c


