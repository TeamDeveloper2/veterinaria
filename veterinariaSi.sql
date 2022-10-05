create table administrador(
	codadmin int PRIMARY key,
	apePaterno VARCHAR(200), 
	apeMaterno VARCHAR(200),
	nombre VARCHAR(200),
	nacionalidad VARCHAR(200),
	genero char(2),
	CI varchar(50),
	fechaNacimiento date
)
create table inventario(
	coditem int primary key,
	cantidad int,
	detalle varchar(200),
	precio decimal(10,8),
	nombreItem varchar(200)
)
-- //////////////////////////// ---
create table cliente(
	codcliente int PRIMARY key,
	apPaterno varchar(200),
	apMaterno varchar(200),
	nombre varchar(200),
	nacinalidad varchar(200),
	genero char(2),
	fechaNacimiento date,
	CI int
)
create table mascota(
	codmascota int primary key,
	nombre varchar(200),
	genero char(2),
	raza varchar(150),
	peso float,
	especie varchar(150),
	fechaNacimiento date
	
)
create table cita(
	codcita int primary key,
	consulta bool,
	curacion int,
	ecografia bool,
	fecha date,
	hemograma bool,
	otro int,
	radiografia bool,
	spa bool
)
create table emergencia(
	codemergencia int primary key,
	envenenamiento bool,
	fecha date,
	fracturaHueso bool,
	paroCardiaco bool,
	parto bool
)
create table radiografia(
	codradiografia int primary key,
	areacuerpo varchar(150),
	fecha date,
	precio decimal(10,8)
)
create table cirugia(
	codcirugia int primary key,
	castraccion bool,
	catarata bool,
	cola bool,
	oreja bool,
	traumatologia bool	
)
create table spa(
	codspa int primary key,
	ducha bool,
	fecha date,
	limpiezadental bool,
	peluqueria bool,
	precio decimal(10,8)
)
-- *********************************
create table registromedico(
	codregistro int primary key,
	codenfermedad int,
	codtableta int
)
create table enfermedad(
	fecha date,
	nombreenfermedad varchar(250),
	sintomas varchar(200),
	codenfermedad int
)
create table tableta(
	dosispordia int primary key,
	fecha date,
	nombremedicamente varchar(250),
	precio decimal(10,8),
	codtableta int
)
create table ecografia(
	codecografia int primary key,
	fecha date,
	precio decimal(10,8),
	codecoabdominal int,
	codecocorazon int
)
create table ecoabdominal(
	codecoabdominal	int primary key,
	detalle varchar(250),
	fecha date
)

create table ecocorazon(
	codecocorazon int primary key,
	detalle varchar(250),
	fecha date
)
create table hemograma(
	codhemograma int primary key,
	fecha date,
	codcsc int,
	codpmb int,
	codenfcorazon int
)
create table csc(
	globulo_blanco float,
	globulo_rojos float,
	hemoglobina float,
	plaquetas float,
	codcsc int
)
create table pmb(
	codpmb int primary key,
	calcio float,
	electrolitos FLOAT,
	glucosa float
)
create table enfermedadescardiacas(
	codenfcorazon int primary key,
	nivelHDL float,
	nivelDL float,
	nivletrigiceridos float,
	colesteroltotal float
)


