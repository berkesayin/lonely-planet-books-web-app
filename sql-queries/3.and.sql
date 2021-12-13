SELECT * FROM customersinfo

-- And Kullanýmý

/* And koþulu þu anlama gelir: Where'den sonra yazýlan 2 koþulun da tutmasý (saðlanmasý) gerekir. */

SELECT * FROM customersinfo Where gender='Man' AND id>10

SELECT * FROM customersinfo Where city='Istanbul' AND gender='Man'