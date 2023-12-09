create DATABASE proyecto;
USE proyecto;

-- TABLA DE APOYOS
CREATE TABLE apoyo(
id int not null auto_increment  primary KEY, 
nombre varchar (50) NOT NULL,
descripcion varchar (255) NOT NULL,
fechaLimite date,
created_at datetime,
	updated_at datetime null,
    deleted_at datetime null
);

-- TABLA DE PERFILES
CREATE TABLE perfiles (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_perfil VARCHAR(20) NOT NULL UNIQUE,
    created_at DATETIME, 
    updated_at DATETIME NULL,
    deleted_at DATETIME NULL
);

-- TABLA DE USUARIOS
CREATE TABLE usuarios (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    correo_electronico VARCHAR(50) NOT NULL UNIQUE,
    contraseña VARCHAR(150) NOT NULL,
    perfil_id INT NOT NULL,
    created_at DATETIME,
    updated_at DATETIME NULL,
    deleted_at DATETIME NULL,
   constraint perfil_id FOREIGN KEY (perfil_id) REFERENCES perfiles(id)
);

-- Tabla de información de pacientes
CREATE TABLE info_pacientes (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    nombre VARCHAR(50),
    apellido_paterno VARCHAR(20),
    apellido_materno VARCHAR(20),
    fecha_nacimiento DATE NULL,
    genero CHAR,
    curp VARCHAR(18),
    telefono VARCHAR(15) NULL,
    foto VARCHAR(250) NULL,
    ocupacion VARCHAR(35),
    calle VARCHAR(20),
    numero_exterior INT NOT NULL,
    numero_interior INT NULL,
    cod_postal INT NOT NULL,
    comunidad VARCHAR(50),
    localidad VARCHAR(20),
    estado VARCHAR(20),
    numero_ambulatorio VARCHAR(10),
    nivel_ambulatorio VARCHAR(10),
    numero_telefono VARCHAR(10),
    status BOOLEAN DEFAULT TRUE,
    created_at DATETIME,
    updated_at DATETIME NULL,
    deleted_at DATETIME NULL,
    constraint usuario_id FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

-- Tabla de información de doctores
CREATE TABLE info_doctores (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    nombre VARCHAR(50),
    apellido_paterno VARCHAR(20),
    apellido_materno VARCHAR(20),
    fecha_nacimiento DATE NULL,
    genero CHAR,
    curp VARCHAR(18),
    telefono VARCHAR(15) NULL,
    foto VARCHAR(250) NULL,
    ocupacion VARCHAR(35),
    calle VARCHAR(20),
    numero_exterior INT NOT NULL,
    numero_interior INT NULL,
    cod_postal INT NOT NULL,
    comunidad VARCHAR(50),
    localidad VARCHAR(20),
    estado VARCHAR(20),
    carrera VARCHAR(10),
    especialidad VARCHAR(10),
    licencia VARCHAR(10),
    departamento VARCHAR(10),
    status BOOLEAN DEFAULT TRUE,
    created_at DATETIME,
    updated_at DATETIME NULL,
    deleted_at DATETIME NULL,
    constraint usuarios_idD FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

-- Tabla de información de enfermeras
CREATE TABLE info_enfermeras (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    nombre VARCHAR(50),
    apellido_paterno VARCHAR(20),
    apellido_materno VARCHAR(20),
    fecha_nacimiento DATE NULL,
    genero CHAR,
    curp VARCHAR(18),
    telefono VARCHAR(15) NULL,
    foto VARCHAR(250) NULL,
    ocupacion VARCHAR(35),
    calle VARCHAR(20),
    numero_exterior INT NOT NULL,
    numero_interior INT NULL,
    cod_postal INT NOT NULL,
    comunidad VARCHAR(50),
    localidad VARCHAR(20),
    estado VARCHAR(20),
    carrera VARCHAR(10),
    especialidad VARCHAR(10),
    licencia VARCHAR(10),
    departamento VARCHAR(10),
    cargo VARCHAR(10),
    status BOOLEAN DEFAULT TRUE,
    created_at DATETIME,
    updated_at DATETIME NULL,
    deleted_at DATETIME NULL,
   constraint usuario_idE FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

-- Tabla de recetas médicas
CREATE TABLE recetas_medicas (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_doctor INT NOT NULL,
    id_paciente INT NOT NULL,
    nombre_doctor VARCHAR(100),
    numero_licencia_doctor VARCHAR(20),
    especialidad_doctor VARCHAR(50),
    nombre_paciente VARCHAR(100),
    peso DECIMAL(5,2),
    altura DECIMAL(5,2),
    temperatura DECIMAL(4,2),
    alergias TEXT,
    fecha_emision DATE,
    id_medicamento INT,
    created_at DATETIME,
    updated_at DATETIME NULL,
    deleted_at DATETIME NULL,
   constraint id_doctor FOREIGN KEY (id_doctor) REFERENCES info_doctores(id),
    constraint id_paciente FOREIGN KEY (id_paciente) REFERENCES info_pacientes(id),
    constraint id_medicamento FOREIGN KEY (id_medicamento) REFERENCES medicamentos(id)
);

-- Tabla de medicamentos
CREATE TABLE medicamentos (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion TEXT,
    fechaCaducidad DATE not null,
    lote varchar(10) not null,
    created_at DATETIME,
    updated_at DATETIME NULL,
    deleted_at DATETIME NULL
);

-- tabla de citas médicas
CREATE TABLE citas_medicas (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_paciente INT NOT NULL,
    numero_afiliacion_paciente VARCHAR(15),
    fecha_cita DATETIME,
    sala_consulta VARCHAR(10),
    id_doctor INT NOT NULL,
    motivo_cita TEXT,
    created_at DATETIME,
    updated_at DATETIME NULL,
    deleted_at DATETIME NULL,
    constraint id_pacienteC FOREIGN KEY (id_paciente) REFERENCES info_pacientes(id),
    constraint id_doctorC  	FOREIGN KEY (id_doctor) REFERENCES info_doctores(id)
);

-- tabla de recetas de apoyo
create table recetas_apoyo(
id int not null auto_increment primary key,
id_paciente int not null,
id_doctor int not null,
id_apoyo int not null,
motivo text not null,
fecha_emision date not null,
 constraint id_pacienteA FOREIGN KEY (id_paciente) REFERENCES info_pacientes(id),
    constraint id_doctorA  	FOREIGN KEY (id_doctor) REFERENCES info_doctores(id),
 constraint id_apoyoA FOREIGN KEY (id_apoyo) REFERENCES apoyo(id),
 created_at DATETIME,
    updated_at DATETIME NULL,
    deleted_at DATETIME NULL
);
