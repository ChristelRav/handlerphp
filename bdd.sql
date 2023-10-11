create database handlerphp;

use handlerphp;

create table sessionphp (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cle VARCHAR(50),
    valeur VARCHAR(100) ,
    date_insertion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);