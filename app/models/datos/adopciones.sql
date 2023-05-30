
DROP TABLE IF EXISTS refugio;
CREATE table refugio
(
nif varchar(9) PRIMARY KEY,
CHECK(LENGTH(nif)=9),
nom_refugio varchar(200) NOT NULL,
direccion varchar(200) NOT NULL,
telefono varchar(9) NOT NULL,       
CHECK(LENGTH(telefono)=9),
email varchar(100) NOT NULL,
contrasena varchar(15) NOT NULL
);

DROP TABLE IF EXISTS animal;
CREATE table animal
(
    microchip varchar(15) PRIMARY KEY,
    CHECK(LENGTH(microchip)>=10),
    nif_refugio varchar(200) NOT NULL,
    especie enum("perro", "gato", "conejo", "ave", "equino") NOT NULL,
    raza varchar(100) NOT NULL,
    nombre varchar(50) NOT NULL,
    sexo enum("macho", "hembra") NOT NULL,
    fecha_nac date NOT NULL,
    tamano varchar(50),
    peso decimal(2,2),
    CONSTRAINT fk_animal_refugio
    FOREIGN KEY (nif_refugio)
    REFERENCES refugio(nif)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    );

    
DROP TABLE IF EXISTS usuario;
CREATE table usuario
(
    email varchar(30) PRIMARY KEY,
    nombre varchar(50) NOT NULL,
    apellidos varchar(100) NOT NULL,
    nick varchar(15) NOT NULL,
    contrasena varchar(15) NOT NULL,
    intereses varchar(50)
);
