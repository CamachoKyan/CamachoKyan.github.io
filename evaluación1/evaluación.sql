CREATE DATABASE mi_bd;

USE mi_bd;

CREATE TABLE animales_zoologico (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50),
  especie VARCHAR(50),
  habitat VARCHAR(50),
  alimentacion tinyint(1),
  tamano VARCHAR(50),
  promedio_vida INT
);

-- Insertar 15 registros en la tabla "animales_zoologico"
INSERT INTO animales_zoologico (nombre, especie, habitat, alimentacion, tamano, promedio_vida)
VALUES
  ('León', 'Panthera leo', 'Savanna', '1', 'Grande', '14'),
  ('Tigre', 'Panthera tigris', 'Bosque', '1', 'Grande', '13'),
  ('Elefante', 'Loxodonta africana', 'Sabana', '0', 'Grande', '65'),
  ('Jirafa', 'Giraffa camelopardalis', 'Sabana', '0', 'Grande', '23'),
  ('Cebra', 'Equus quagga', 'Sabana', '0', 'Mediano', '27'),
  ('Rinoceronte', 'Ceratotherium simum', 'Sabana', '0', 'Grande', '45'),
  ('Hipopótamo', 'Hippopotamus amphibius', 'Río', '0', 'Grande', '45'),
  ('Oso polar', 'Ursus maritimus', 'Océano Ártico', '1', 'Grande', '25'),
  ('Pingüino', 'Spheniscus demersus', 'Antártida', '1', 'Pequeño', '13'),
  ('Mono', 'Pan troglodytes', 'Bosque', 'Omnívoro', 'Pequeño', '37'),
  ('Cocodrilo', 'Crocodylus niloticus', 'Río', '1', 'Grande', '85'),
  ('Tortuga', 'Geochelone gigantea', 'Isla', '0', 'Grande', '125'),
  ('Tiburón blanco', 'Carcharodon carcharias', 'Océano', '1', 'Grande', '70'),
  ('Canguro', 'Macropus rufus', 'Sabana', '0', 'Mediano', '5'),
  ('Orangután', 'Pongo pygmaeus', 'Bosque', '0', 'Mediano', '35');

CREATE TABLE autos (
    id INT PRIMARY KEY,
    marca VARCHAR(50),
    modelo VARCHAR(50),
    color VARCHAR(50),
    año INT,
    precio DECIMAL(8,2)
);

INSERT INTO autos (id, marca, modelo, color, año, precio)
VALUES
    (1, 'Ford', 'Mustang', 2021, 'Rojo', 30000.00),
    (2, 'Chevrolet', 'Camaro', 2020, 'Negro', 25000.00),
    (3, 'Dodge', 'Challenger', 2022, 'Blanco', 32000.00),
    (4, 'Tesla', 'Model S', 2019, 'Azul', 55000.00),
    (5, 'Nissan', 'GT-R', 2021, 'Gris', 90000.00),
    (6, 'Toyota', 'Supra', 2020, 'Rojo', 45000.00),
    (7, 'BMW', 'M3', 2022, 'Negro', 60000.00),
    (8, 'Audi', 'R8', 2018, 'Blanco', 80000.00),
    (9, 'Mercedes-Benz', 'AMG GT', 2021, 'Gris', 75000.00),
    (10, 'Porsche', '911', 2020, 'Rojo', 110000.00),
    (11, 'Ferrari', '488', 2022, 'Negro', 250000.00),
    (12, 'Lamborghini', 'Huracan', 2019, 'Amarillo', 300000.00),
    (13, 'McLaren', '720S', 2021, 'Naranja', 250000.00),
    (14, 'Bugatti', 'Chiron', 2020, 'Azul', 500000.00),
    (15, 'Koenigsegg', 'Jesko', 2022, 'Plata', 400000.00);
