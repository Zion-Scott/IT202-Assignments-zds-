
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

--Create new tables | Week 7 Assignment

SELECT * FROM `Transcript`; 
SELECT * FROM `Student`; 
DELETE FROM `Transcript` WHERE `ID` = '';


CREATE TABLE Student (
    FirstName VARCHAR(50),
    ID INT PRIMARY KEY,
    Major VARCHAR(50)
);

CREATE TABLE Transcript (
    ID INT PRIMARY KEY,
    Course VARCHAR(10),
    Grade VARCHAR(2)
);

INSERT INTO `Transcript` (`ID`, `Course`, `Grade`)
VALUES ('', '', '');

--Join Student table with Transcrip table
SELECT 
  Student.ID AS ID,
  Student.FirstName,
  Student.Major,
  Transcript.Course,
  Transcript.Grade
FROM Student
INNER JOIN Transcript
ON Student.ID = Transcript.ID;

