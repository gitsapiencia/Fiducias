CREATE DATABASE IF NOT EXISTS sap_fiducias;

USE sap_fiducias;

-- Tabla para almacenar la información principal de los contratos
CREATE TABLE IF NOT EXISTS contratos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_contrato VARCHAR(255) NOT NULL,
    lineas_fondo VARCHAR(255),
    epm BOOLEAN,
    todos BOOLEAN,
    operador_financiero VARCHAR(255) NOT NULL,
    fecha_inicial DATE NOT NULL,
    fecha_final DATE NOT NULL,
    recurso_inicial DECIMAL(10, 2) NOT NULL,
    comision DECIMAL(10, 2) NOT NULL,
    porcentaje_comision DECIMAL(5, 2) NOT NULL,
    porcentaje_adicion DECIMAL(5, 2) NOT NULL
);

-- Tabla para almacenar la información de las comunas, recursos a administrar y comisiones asociadas a un contrato
CREATE TABLE IF NOT EXISTS comunas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contrato_id INT,
    comuna VARCHAR(255) NOT NULL,
    recurso_administrar DECIMAL(10, 2) NOT NULL,
    comision DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (contrato_id) REFERENCES contratos(id)
);

-- Tabla para almacenar la información de las adiciones asociadas a un contrato
CREATE TABLE IF NOT EXISTS adiciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contrato_id INT,
    tipo_adicion VARCHAR(255) NOT NULL,
    valor_adicion DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (contrato_id) REFERENCES contratos(id)
);

CREATE TABLE IF NOT EXISTS lineas_fondo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);
-- Inserta algunas opciones de ejemplo
INSERT INTO lineas_fondo (nombre) VALUES
    ('Opción 1'),
    ('Opción 2');

-- Tabla para almacenar las opciones de la lista desplegable tipo_operador_financiero
CREATE TABLE IF NOT EXISTS tipo_operador_financiero (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);

-- Inserta algunas opciones de ejemplo
INSERT INTO tipo_operador_financiero (nombre) VALUES
    ('Opción 1'),
    ('Opción 2');

-- Tabla para almacenar las opciones de la lista desplegable programa
CREATE TABLE IF NOT EXISTS programa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);

-- Inserta algunas opciones de ejemplo
INSERT INTO programa (nombre) VALUES
    ('Programa 1'),
    ('Programa 2');

-- Tabla para almacenar la información principal de las cuentas de ahorro/FIC
CREATE TABLE IF NOT EXISTS cuentas_ahorro_fic (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo_operador_financiero_id INT,
    contrato_id INT,
    cuenta VARCHAR(255) NOT NULL,
    programa_id INT,
    tipo_cuenta VARCHAR(50) NOT NULL,
    deposito_inicial DECIMAL(10, 2) NOT NULL,
    periodo VARCHAR(20) NOT NULL,
    FOREIGN KEY (tipo_operador_financiero_id) REFERENCES tipo_operador_financiero(id),
    FOREIGN KEY (contrato_id) REFERENCES contratos(id),
    FOREIGN KEY (programa_id) REFERENCES programa(id)
);

-- Tabla para almacenar la relación entre cuentas y comunas/corregimientos
CREATE TABLE IF NOT EXISTS cuentas_comunas_corregimientos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cuenta_id INT,
    comuna_corregimiento VARCHAR(255) NOT NULL,
    FOREIGN KEY (cuenta_id) REFERENCES cuentas_ahorro_fic(id)
);

-- Tabla para almacenar la información principal de los valores que afectan el fondo
CREATE TABLE IF NOT EXISTS valores_fondo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contrato VARCHAR(255) NOT NULL,
    cuenta VARCHAR(255) NOT NULL,
    programa_id INT,
    FOREIGN KEY (programa_id) REFERENCES programa(id)
);

-- Tabla para almacenar los valores que aumentan el fondo
CREATE TABLE IF NOT EXISTS aumento_fondo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contrato_id INT,
    tipo VARCHAR(255) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (contrato_id) REFERENCES valores_fondo(id)
);

-- Tabla para almacenar los valores que disminuyen el fondo
CREATE TABLE IF NOT EXISTS disminucion_fondo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contrato_id INT,
    tipo VARCHAR(255) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (contrato_id) REFERENCES valores_fondo(id)
);
