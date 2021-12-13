/*  SQL Like Ýle Çalýþmak */

/* Like Ýfadesiyle Çalýþmak */

SELECT * FROM customersinfo

-- Ýsmi Berke olan ürünü getir:
SELECT * FROM customersinfo Where name = 'Berke'

-- Mesela ürün adýný hatýrlayamadýk, be karakterleri ile baþladýðýný
SELECT * FROM customersinfo Where name like 'Be%'
-- Like ifadesi bu þekilde kullanýlýr. ch'tan sonrasý ne olursa olsun anlamýna gelir.

-- Ürün soy adýnýn baþý önemli deðil ama n karakterleri ile bitiyorsa
SELECT * FROM customersinfo Where surname like '%n'

-- Baþý sonu önemli deðil içerisinde rk geçen bütün ürünleri getir
SELECT * FROM customersinfo Where name like '%rk%'