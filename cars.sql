CREATE TABLE images_cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    src VARCHAR(255) NOT NULL,
    alt VARCHAR(255) NOT NULL,
    data VARCHAR(255) NOT NULL
);

INSERT INTO images_cars (src, alt, data) VALUES
('images/Dodge Charger SRT.jpg', 'Dodge Charger SRT', 'red'),
('images/Ferrari Laferrari.jpg', 'Ferrari Laferrari', 'red'),
('images/Ford Mustang.jpg', 'Ford Mustang', 'black'),
('images/Ford Raptor.jpg', 'Ford Raptor', 'black'),
('images/Lamborghini Aventador.jpg', 'Lamborghini Aventador', 'green'),
('images/Mc Laren P1.jpg', 'Mc Laren P1', 'black'),
('images/McLaren Mansory.jpg', 'McLaren Mansory', 'red');
