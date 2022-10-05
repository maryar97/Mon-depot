CREATE USER 'util3'@'localhost' IDENTIFIED BY 'util1234';
GRANT SELECT
ON hotel.station
TO 'util3'@'localhost' ;
FLUSH PRIVILEGES;