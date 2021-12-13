/* Sýralama Sorgularýyla Çalýþmak */

-- Veri Tabanýndaki sýrasýna göre
SELECT * FROM customersinfo

-- name sütunundaki verileri alfabetik olarak sýralar.(metinsel ifadeler için)
SELECT * FROM customersinfo order by name

-- surname sütunundaki verileri alfabetik olarak sýralar.(metinsel ifadeler için)
SELECT * FROM customersinfo order by surname

-- name sütunundaki verileri alfabetik olarak tersten sýralar.(metinsel ifadeler için)
SELECT * FROM customersinfo order by name desc

-- id sütunundaki verileri numerik olarak sýralar.(sayýsal ifadeler için) (tersten)
SELECT * FROM customersinfo order by id desc

-- id sütunundaki verileri numerik olarak sýralar.(sayýsal ifadeler için) (normal-default)
SELECT * FROM customersinfo order by id asc

/* asc = ascending (artan)  /   dsc = descending (azalan) */

