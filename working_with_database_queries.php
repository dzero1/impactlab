<?php

// Write a SQL statement to get all users’ names and email addresses from the table named "users."
$sql = "SELECT name, email FROM users";

// Write a query to find the average age of all users in the "users" table.
// Average = SUM(age)/COUNT(*). But in mysql have AVG() method to do it.
$sql = "SELECT AVG(age) FROM users";


// Write a SQL command to retrieve the top five products with the highest sales from a table named "sales."
// Assume that the sale value is stored in a column named "sale_value".
// the approach is order the table by sale_value and get the first 5 records
$sql = "SELECT * FROM sales ORDER BY sale_value DESC LIMIT 5";
