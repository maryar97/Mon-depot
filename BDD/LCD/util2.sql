CREATE USER 'util2'@'localhost' IDENTIFIED BY 'util123';
GRANT SELECT 
ON hotel.* 
TO 'util2'@'localhost';
FLUSH PRIVILEGES;
