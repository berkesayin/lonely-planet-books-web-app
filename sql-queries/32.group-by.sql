SELECT COUNT(id), city
FROM customersinfo
GROUP BY city
ORDER BY COUNT(id) DESC;