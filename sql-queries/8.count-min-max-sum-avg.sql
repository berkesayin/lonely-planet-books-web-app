/* Aggregeation Fonksiyonlarýyla Çalýþmak */

/* Count Fonksiyonu ve Detaylarý */

SELECT * FROM customersinfo

-- customersinfo tablomuzda kaç adet kayýt var?
Select Count(*) From customersinfo

-- customersinfo tablomuzda kaç adet kayýt var? Alias ile
Select Count(*) as Total From customersinfo

-- Count Fonksiyonlarý Null Deðerleri Saymaz

/* Min - Max - Rand - Sum - Avg Fonksiyonlarý ile Çalýþmak */

-- Min fonksiyonu
-- Bizde bulunan ilk kaydýn id'si nedir?
Select Min(id) from customersinfo

-- Tablodaki id'si en yüksek olan kayýt
Select Max(id) from customersinfo

-- Bizde id deðerlerinin ortalamasý nedir
Select Avg(id) from customersinfo

-- Rand() fonksiyonu bize rastgele sayý üretmeye yarýyor.
Select Rand()

