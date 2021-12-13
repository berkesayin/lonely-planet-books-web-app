SELECT * FROM customersinfo

-- Or ve Not ile çalýþmak

SELECT * FROM customersinfo Where city='Istanbul' or city='Burdur'

SELECT * FROM customersinfo Where NOT city = 'Burdur' AND NOT city='Rize'
