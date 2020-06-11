/**Created by Visual Studio Code
 * Name: Allyson
 * Date: 10/05/2020
 * PHP Version 7.4
*/
-- Create a new database called 'DatabaseName'
-- Connect to the 'master' database to run this snippet
CREATE DATABASE exemplo;
use exemplo;
-- Create the table in the specified schema
CREATE TABLE produtos (
     id int (11) NOT NULL AUTO_INCREMENT,
    descricao varchar(50)  DEFAULT NULL,
    PRIMARY KEY (id) 
);