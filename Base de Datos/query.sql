-- Crear la tabla Cliente
CREATE TABLE Cliente (
    ID_Cliente SERIAL PRIMARY KEY,
    Nombre VARCHAR(100),
    Pais VARCHAR(100),
    Numero_Identificacion VARCHAR(100)
);

-- Crear la tabla Producto
CREATE TABLE Producto (
    ID_Producto SERIAL PRIMARY KEY,
    Nombre_Producto VARCHAR(100),
    Tipo_Producto VARCHAR(100)
);

-- Crear la tabla Tipo_Consulta
CREATE TABLE Tipo_Consulta (
    ID_Consulta SERIAL PRIMARY KEY,
    Nombre_Consulta VARCHAR(100)
);

-- Crear la tabla Pais
CREATE TABLE Pais (
    ID_Pais SERIAL PRIMARY KEY,
    Nombre_Pais VARCHAR(100)
);

-- Crear la tabla Grupo_Especialidad
CREATE TABLE Grupo_Especialidad (
    ID_Grupo SERIAL PRIMARY KEY,
    Nombre_Grupo VARCHAR(100),
    Especialidad VARCHAR(100)
);

-- Crear la tabla Agente
CREATE TABLE Agente (
    ID_Agente SERIAL PRIMARY KEY,
    Nombre_Agente VARCHAR(100),
    Productos_Asignados VARCHAR(100),
    Tipo_Consulta_Atender VARCHAR(100)
);

-- Crear la tabla Resolucion
CREATE TABLE Resolucion (
    ID_Resolucion SERIAL PRIMARY KEY,
    Tipo_Resolucion VARCHAR(100),
    Metodo_Resolucion VARCHAR(100),
    Porcentaje_Resolucion NUMERIC(5,2)
);

-- Crear las relaciones entre las tablas
ALTER TABLE Cliente 
    ADD COLUMN ID_Pais INT REFERENCES Pais(ID_Pais);

ALTER TABLE Producto 
    ADD COLUMN ID_Consulta INT REFERENCES Tipo_Consulta(ID_Consulta);

ALTER TABLE Cliente 
    ADD COLUMN ID_Consulta INT REFERENCES Tipo_Consulta(ID_Consulta);

ALTER TABLE Cliente 
    ADD COLUMN ID_Grupo INT REFERENCES Grupo_Especialidad(ID_Grupo);

ALTER TABLE Agente 
    ADD COLUMN ID_Consulta INT REFERENCES Tipo_Consulta(ID_Consulta);

ALTER TABLE Resolucion 
    ADD COLUMN ID_Consulta INT REFERENCES Tipo_Consulta(ID_Consulta);
