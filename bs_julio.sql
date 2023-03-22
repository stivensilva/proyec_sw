CREATE TABLE listaclientes(
id_tipo_cliente int(20) NOT NULL,
descripcion_cliente varchar(50) NOT NULL
)ENGINE = InnoDB;
ALTER TABLE listaclientes ADD PRIMARY KEY (id_tipo_cliente);
ALTER TABLE listaclientes CHANGE id_tipo_cliente id_tipo_cliente INT(20) UNSIGNED AUTO_INCREMENT ; 

CREATE TABLE listadocumentos (
id_tipo_documento varchar(4) NOT NULL,
descripcion text NOT NULL,
alterno varchar(30) NOT NULL
)ENGINE = InnoDB;
ALTER TABLE listadocumentos ADD PRIMARY KEY (id_tipo_documento);

CREATE TABLE listageneros (
id_genero CHARACTER(1) NOT NULL,
descripcion_genero varchar(100) NOT NULL,
sw_activo varchar(1)  NOT NULL
)ENGINE = InnoDB;
ALTER TABLE listageneros ADD PRIMARY KEY (id_genero);

CREATE TABLE paises (
id_pais varchar(4) NOT NULL,
descripcion_pais varchar(50)
)ENGINE = InnoDB;
ALTER TABLE paises ADD PRIMARY KEY (id_pais);

CREATE TABLE departamentos (
id_departamento varchar(4) NOT NULL,
descripcion_dpto varchar(4) NOT NULL,
id_pais varchar(4) NOT NULL
)ENGINE = InnoDB;
ALTER TABLE departamentos ADD PRIMARY KEY (id_departamento);
ALTER TABLE departamentos ADD FOREIGN KEY (id_pais) REFERENCES paises(id_pais) ON DELETE RESTRICT ON UPDATE CASCADE;

CREATE TABLE municipios (
id_municipio varchar(4) NOT NULL,
descripcion_municipio varchar(40) NOT NULL,
id_pais  varchar(4) NOT NULL,
id_departamento varchar(4) NOT NULL
)ENGINE = InnoDB;
ALTER TABLE municipios ADD PRIMARY KEY (id_municipio);
ALTER TABLE municipios ADD FOREIGN KEY (id_departamento) REFERENCES departamentos(id_departamento) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE municipios ADD FOREIGN KEY (id_pais) REFERENCES paises(id_pais) ON DELETE RESTRICT ON UPDATE CASCADE;

CREATE TABLE zonas (
id_zona int(20) NOT NULL,
descripcion_zona  varchar(40) NOT NULL
)ENGINE = InnoDB;
ALTER TABLE zonas ADD PRIMARY KEY (id_zona);
ALTER TABLE zonas CHANGE id_zona id_zona int(20) UNSIGNED AUTO_INCREMENT ; 

CREATE TABLE lista_contratos(
id_tipo_contrato int(20) NOT NULL,
descripcion_tipo_contrato varchar(100) NOT NULL
)ENGINE = InnoDB;
ALTER TABLE lista_contratos ADD PRIMARY KEY (id_tipo_contrato);
ALTER TABLE lista_contratos CHANGE id_tipo_contrato id_tipo_contrato int(20) UNSIGNED AUTO_INCREMENT ; 

CREATE TABLE usuarios(
id_usuario int(20) NOT NULL,
id_tipo_documento varchar(4) NOT NULL,
documento_id varchar(30) NOT NULL ,	
password varchar(100) NOT NULL,
primer_nombre varchar(20) NOT NULL COMMENT "Primer nombre del usuario",
segundo_nombre varchar(20) COMMENT "Segundo nombre del usuario",
primer_apellido varchar(20) NOT NULL COMMENT "Primer apellido del usuario",
segundo_apellido varchar(20) COMMENT "Segundo apellido del usuario",
nombre_completo varchar(100) NOT NULL,
admin_sw varchar(1) NOT NULL,
profesional_sw varchar(1) NOT NULL,
activo_sw varchar(1) NOT NULL,
fecha_caducidad_usuario date NOT NULL,
indicativo varchar(5) NOT NULL,
telefono varchar(10) NOT NULL,
extension varchar(5) NOT NULL,
celular varchar(10) NOT NULL,
celular_2 varchar(10) NOT NULL,
email varchar(100) NOT NULL,
email_2 varchar(100) NOT NULL,
firma varchar(400) NOT NULL
)ENGINE = InnoDB;
ALTER TABLE usuarios ADD PRIMARY KEY (id_usuario);
ALTER TABLE usuarios CHANGE id_usuario id_usuario int(20) UNSIGNED AUTO_INCREMENT ; 





CREATE TABLE clientes(
id_cliente int(20) NOT NULL COMMENT "(PK) Identificador unico de cliente",
tipo_cliente integer NOT NULL COMMENT "(FK) Tipo de identificador del cliente, juridica o natural",   
tipo_id_cliente	varchar(30) NOT NULL COMMENT "(FK) Tipo de identificacion del cliente",	
documento_id varchar(30) NOT NULL COMMENT "(FK) Numero de identificacion del cliente",	
digito_verificacion integer NOT NULL COMMENT "Digito de verificacion(valor calculado )",
primer_nombre varchar(20) NOT NULL COMMENT "Primer nombre del cliente",
segundo_nombre varchar(20) COMMENT "Segundo nombre del cliente",
primer_apellido varchar(20) NOT NULL COMMENT "Primer apellido del cliente",
segundo_apellido varchar(20) COMMENT "Segundo apellido del cliente",
nombre_corto varchar(80) COMMENT "Nombre abreviado del cliente ",
nombre_juridico varchar(100) COMMENT "Nombre del tercero",
fecha_nacimiento date NOT NULL COMMENT "Fecha de nacimiento del cliente",
id_genero varchar(1) COMMENT "Genero",
dirección_1 varchar(100) NOT NULL COMMENT "Direccion del cliente campo, obligatorio",
dirección_2 varchar(100) COMMENT "Direccion del cliente, opcional",
teléfono_1 varchar(10) NOT NULL COMMENT "Telefono del cliente campo, obligatorio",
teléfono_2 varchar(10) COMMENT "Telefono del cliente campo, opcional",
celular_1 varchar(10) NOT NULL COMMENT "Numero celular del cliente campo, obligatorio",
celular_2 varchar(10) COMMENT "Numero celular del cliente campo, opcional",
email_1 varchar(150) NOT NULL COMMENT "Correo electronico, obligatorio",
email_2 varchar(150) COMMENT "Correo Electronico, opcional",
id_pais  varchar(4) NOT NULL COMMENT "Codigo Pais divipola de Colombia",
id_departamento varchar(4) NOT NULL COMMENT "Codigo Departamento divipola de Colombia",
id_municipio varchar(4) NOT NULL COMMENT "Codigo Municipio divipola de Colombia",
id_zona int(20) NOT NULL COMMENT "Zona, Rural Urban",
resposable_iva varchar(1) NOT NULL COMMENT "Responsable de IVA, Si = 1 o NO = 2",
reteica varchar(1) NOT NULL COMMENT "SI tiene reteica SI=1 NO=2",
autoretenedor_fuente varchar(1) NOT NULL,
proveedor_sw varchar(1) NOT NULL,
fecha_registro timestamp  NOT NULL default now(),
usuario_registra integer NOT NULL,
estado varchar(1) NOT NULL
)ENGINE = InnoDB;

ALTER TABLE clientes ADD PRIMARY KEY (id_cliente);
ALTER TABLE `clientes` CHANGE `id_cliente` `id_cliente` INT(20) UNSIGNED AUTO_INCREMENT ; 


ALTER TABLE clientes ADD FOREIGN KEY (id_pais) REFERENCES paises(id_pais) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE clientes ADD FOREIGN KEY (id_departamento) REFERENCES departamentos(id_departamento) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE clientes ADD FOREIGN KEY (id_municipio) REFERENCES municipios(id_municipio) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE clientes ADD FOREIGN KEY (tipo_cliente) REFERENCES listaclientes(id_tipo_cliente) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE clientes ADD FOREIGN KEY (id_zona) REFERENCES zonas(id_zona);
ALTER TABLE clientes ADD FOREIGN KEY (id_genero) REFERENCES listageneros(id_genero) ON DELETE RESTRICT ON UPDATE CASCADE;



CREATE TABLE contratos(
id_cliente int(20) NOT NULL,
id_contrato int(20) NOT NULL,
descripcion text NOT NULL,
numero_contrato text NOT NULL,
fecha_ini date NOT NULL,
fecha_fin date NOT NULL,
fecha_registro timestamp NOT NULL default now(),
id_usuario integer NOT NULL,
contacto_contrato varchar(30) NOT NULL,
credito_dias_cartera integer NOT NULL,
lista_precio varchar(4) NOT NULL,
id_tipo_contrato varchar (3) NOT NULL,
sw_paragrafados varchar (1) NOT NULL,
estado varchar (1) NOT NULL
)ENGINE = InnoDB;

    ALTER TABLE contratos ADD PRIMARY KEY (id_contrato);
    ALTER TABLE contratos ADD FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente) ON DELETE RESTRICT ON UPDATE CASCADE;
    ALTER TABLE contratos CHANGE id_contrato id_contrato int(20) UNSIGNED AUTO_INCREMENT ; 








