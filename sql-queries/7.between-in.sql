/*  SQL Between - In Ýle Çalýþmak */

SELECT * FROM customersinfo

/* Between ve In Ýfadeleriyle Çalýþmak */

-- Id'si 10 ile 20 arasýnda olan kiþiler.
Select * From customersinfo Where id between 10 and 20

-- Id'si 10 ile 30 arasýnda olan ürünleri id olarak büyükten küçüðe sýrala.
Select * From customersinfo Where id between 10 and 30 order by id desc

-- between'de ilk deðer ve son deðer aralýða dahildir.

-- In ifadesi

-- Id'si 10 ya da 20 olan ürünler
Select *from customersinfo where id in (10,20)