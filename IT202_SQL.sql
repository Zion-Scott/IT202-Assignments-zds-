
-- a SELECT statement that retrieves all records in your DB table.
SELECT * FROM `SampleTable`; 


--a SELECT statement that retrieves records based on a specific column.
SELECT * FROM `SampleTable` WHERE `Employer` = 'CartoonNetwork';


/* a SELECT statement that retrieves only certain columns in the table 
 based upon a specific column matching a specific value in your DB table. */
SELECT `FirstName`, `LastName` FROM `SampleTable` WHERE `LastName` = 'Jack';

-- an INSERT statement that inserts a record into your DB Table.
INSERT INTO `SampleTable` (`FirstName`, `LastName`, `SSN`, `Address`, `Employer`)
VALUES ('Spongebob', 'Squarepants', '049584830', '124 Conch St.', 'Krusty Krab');


-- an UPDATE statement that updates a column in a specific record with a new value
UPDATE `SampleTable` SET `Address` = '495 Updated Rd.' WHERE `SSN` = '987654321';


-- a DELETE statement that deletes record(s) using a specific column(s)  for a match on a specific value in your DB table
DELETE FROM `SampleTable` WHERE `SSN` = '104857384';

