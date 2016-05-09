use explorescz_db;

create table categoria(
  id int NOT null AUTO_INCREMENT primary key,
  nombre varchar(50)
);

create table tipo_categoria(
id int NOT NULL auto_increment primary key,
  nombre varchar(50),
  id_categoria_fk int,
FOREIGN KEY (id_categoria_fk)REFERENCES categoria (id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE tipo_contacto(
  id int NOT NULL auto_increment primary key,
  nombre varchar(50)
);

CREATE TABLE tipo_imagen(
  id int NOT NULL auto_increment primary key,
  nombre varchar(50)
);

CREATE TABLE tipo_suscriptores
( id int NOT NULL auto_increment primary key,
  nombre varchar(50)
);

CREATE TABLE rubro(
  id int NOT NULL auto_increment primary key,
  nombre varchar(50)
);

CREATE TABLE descripcion
(
  id int NOT NULL auto_increment primary key,
  lugar_partida varchar(60),
  hora_partida time
);

CREATE TABLE plan(
  id int NOT NULL auto_increment primary key,
  nombre varchar(60),
  costo int
);

CREATE TABLE eventos(
  id int NOT NULL auto_increment primary key,
  nombre varchar(50),
  descripcion varchar(100),
  precio int,
  fecha_inicio datetime,
  fecha_fin datetime,
  id_descripcion_fk int,
 FOREIGN KEY (id_descripcion_fk) REFERENCES descripcion (id) ON UPDATE cascade ON DELETE cascade
);

CREATE TABLE agencia_viaje(
  id int NOT NULL auto_increment primary key,
  nombre varchar(60),
  direccion varchar(60),
  ubicacion varchar(60),
  valoracion varchar(60),
  id_eventos_fk int,
FOREIGN KEY (id_eventos_fk)REFERENCES eventos (id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE empresa_servicio
(
  id int NOT NULL auto_increment primary key,
  nombre varchar(50),
  direccion varchar(60),
  ubicacion varchar(60),
  email varchar(60),
  id_rubro_fk int,
  FOREIGN KEY (id_rubro_fk) REFERENCES rubro (id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE lugar_turistico(
  id int NOT NULL auto_increment primary key,
  nombre varchar(60),
  descripcion varchar(100),
  direccion varchar(50),
  ubicacion varchar(50),
  valoracion varchar(20),
  id_descripcion_partida int,
  id_tipo_categoria_fk int,
FOREIGN KEY (id_descripcion_partida)REFERENCES descripcion (id) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY (id_tipo_categoria_fk)REFERENCES tipo_categoria (id)ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE promocion
(
  id int NOT NULL auto_increment primary key,
  nombre varchar(60),
  descripcion varchar(100),
  fecha_inicio datetime,
  fecha_fin datetime,
  id_empresa_servicio_fk int,
FOREIGN KEY (id_empresa_servicio_fk)REFERENCES empresa_servicio (id) ON UPDATE cascade ON DELETE cascade
);

CREATE TABLE comentar(
  id int NOT NULL auto_increment primary key,
  email varchar(50),
  nombre varchar(60),
  comentario varchar(120),
  id_lugar_turistico_fk int,
FOREIGN KEY (id_lugar_turistico_fk)REFERENCES lugar_turistico (id)ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE contacto(
  id int NOT NULL auto_increment primary key,
  nombre varchar(60),
  id_contacto int,
  id_tipo_contacto_fk int,
FOREIGN KEY (id_contacto)REFERENCES agencia_viaje (id) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY (id_contacto)REFERENCES empresa_servicio (id)ON UPDATE NO ACTION ON DELETE NO ACTION,
FOREIGN KEY (id_contacto)REFERENCES lugar_turistico (id) ON UPDATE NO ACTION ON DELETE NO ACTION,
FOREIGN KEY (id_tipo_contacto_fk)REFERENCES tipo_contacto (id)ON UPDATE NO ACTION ON DELETE NO ACTION
);

CREATE TABLE imagenes
(
  id int NOT NULL auto_increment primary key,
  url varchar(60),
  id_origen int,
  id_tipo_imagen_fk int,
FOREIGN KEY (id_origen)REFERENCES empresa_servicio (id)ON UPDATE NO ACTION ON DELETE NO ACTION,
FOREIGN KEY (id_origen)REFERENCES eventos (id)ON UPDATE NO ACTION ON DELETE NO ACTION,
FOREIGN KEY (id_origen)REFERENCES lugar_turistico (id)ON UPDATE NO ACTION ON DELETE NO ACTION,
FOREIGN KEY (id_tipo_imagen_fk)REFERENCES tipo_imagen (id)ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE suscripcion(
  id int NOT NULL auto_increment primary key,
  fecha_inicio datetime,
  fecha_fin datetime,
  id_plan_fk int,
  id_suscriptor int,
  id_tipo_suscriptor_fk int,
FOREIGN KEY (id_plan_fk)REFERENCES plan (id)ON UPDATE NO ACTION ON DELETE NO ACTION,
FOREIGN KEY (id_suscriptor)REFERENCES agencia_viaje (id)ON UPDATE NO ACTION ON DELETE NO ACTION,
FOREIGN KEY (id_suscriptor)REFERENCES empresa_servicio (id)ON UPDATE NO ACTION ON DELETE NO ACTION,
FOREIGN KEY (id_tipo_suscriptor_fk)REFERENCES tipo_suscriptores (id)ON UPDATE NO ACTION ON DELETE NO ACTION
);


--ALGUNOS DATOS DE INSERCION PARA LA EL FUNCIONAMIENTO
--BANCOS
insert into empresa_servicio values(	1	,'	BANCO ECONOMICO	','	CALLE SIN NOMBRE	,	AVENIDA 23 DE SEPTIEMBRE	','	-17.74941084	;	-63.17431759	','	email	'	,1	);
insert into empresa_servicio values(	2	,'	BANCO BCP	','	CALLE SIN NOMBRE	,	AVENIDA 23 DE SEPTIEMBRE	','	-17.74407185	;	-63.14972313	','	a	'	,1	);
insert into empresa_servicio values(	3	,'	BCP (AGENTE);	','	AVENIDA 7° ANILLO	,	AVENIDA 2 DE AGOSTO	','	-17.74280920	;	-63.14958738	','	email	'	,1	);
insert into empresa_servicio values(	4	,'	BANCO  SOL	','	CALLE INFORMATICO	,	CALLE 15 DE DICIEMBRE	','	-17.73537244	;	-63.14487219	','	email	'	,1	);
insert into empresa_servicio values(	5	,'	BANCO FASSIL	','	CALLE LEWIS CARROL	,	AVENIDA 2 DE AGOSTO	','	-17.73730861	;	-63.14532096	','	email	'	,1	);
insert into empresa_servicio values(	6	,'	BANCO FASSIL	','	CALLE 12	,	AV. PROLONGACION MUTUALISTA	','	-17.72880315	;	-63.16618819	','	email	'	,1	);
insert into empresa_servicio values(	7	,'	BANCO BNB	','	CALLE SIN NOMBRE	,	CALLE 2 OESTE	','	-17.72880315	;	-63.16618819	','	email	'	,1	);
insert into empresa_servicio values(	8	,'	BANCO BISA	','	AVENIDA CRISTOBAL DE MENDOZA	,	CALLE MOXOS	','	-17.78955377	;	-63.19152340	','	email	'	,1	);
insert into empresa_servicio values(	9	,'	BANCO GANADERO	','	AVENIDA CRISTOBAL DE MENDOZA	,	CALLE FORTIN ARCE	','	-17.78522699	;	-63.19457031	','	email	'	,1	);
insert into empresa_servicio values(	10	,'	BANCO BISA	','	CALLE SANTA FE	,	AVENIDA MONSEÑOR RIVERO	','	-17.77649044	;	-63.18231707	','	email	'	,1	);
insert into empresa_servicio values(	11	,'	BANCO DE CREDITO	','	C/ CASTELNAU	,	PROLONGACION AVENIDA BENI	','	-17.77852495	;	-63.18877884	','	email	'	,1	);
insert into empresa_servicio values(	12	,'	BANCO FASSIL	','	AV. GERMAN BUSH	,	CALLE LIBERTAD	','	-17.77966860	;	-63.18468356	','	email	'	,1	);
insert into empresa_servicio values(	13	,'	BANCO FASIL	','	AVENIDA URUGUAY	,	CALLE AVAROA	','	-17.77531371	;	-63.18271654	','	email	'	,1	);
insert into empresa_servicio values(	14	,'	BANCO FORTALEZA	','	AVENIDA URUGUAY	,	CALLE AROMA	','	-17.77527864	;	-63.18249846	','	email	'	,1	);
insert into empresa_servicio values(	15	,'	BANCO MERCANTIL SANTA CRUZ	','	AV. CAÑOTO	,	C/ 24 DE SEPTIEMBRE	','	-17.78375667	;	-63.17082189	','	email	'	,1	);
insert into empresa_servicio values(	16	,'	BANCO FASSIL	','	AV. CAÑOTO	,	C/ 24 DE SEPTIEMBRE	','	-17.78060726	;	-63.16510072	','	email	'	,1	);
insert into empresa_servicio values(	17	,'	BNB BANCI NACONAL DE BOLIVIA	','	AVENIDA URUGUAY	,	CALLE QUIJARRO	','	-17.78588584	;	-63.18445852	','	email	'	,1	);
insert into empresa_servicio values(	18	,'	BANCO DE CREDITO BOLIVIA  ECP	','	AVENIDA URUGUAY	,	CALLE BENI	','	-17.78558906	;	-63.18438573	','	email	'	,1	);
insert into empresa_servicio values(	19	,'	BANCO FACIL	','	AC. CAÑOTO	,	C/ LIBERTAD	','	-17.79870648	;	-63.19069517	','	email	'	,1	);
insert into empresa_servicio values(	20	,'	COOPERATIVA JESUS NAZARENO	','	C/ ANDRES IBAÑEZ	,	C/ 24 DE SEPTIEMBRE	','	-17.79838277	;	-63.19081111	','	email	'	,1	);
insert into empresa_servicio values(	21	,'	BANCO ECONOMICO	','	CELSO CASTEDO	,	QUIJARRO	','	-17.79775191	;	-63.19160790	','	email	'	,1	);
insert into empresa_servicio values(	22	,'	OFICINA DE ARCHIVO DEL BANCO FACIL	','	C/ ANDRES IBAÑEZ	,	C/LIBERTAD	','	-17.79752380	;	-63.19168010	','	email	'	,1	);
insert into empresa_servicio values(	23	,'	BANCO FIE	','	CALLE ANTONIO VACA DIEZ	,	CALLE QUIJARRO	','	-17.79752380	;	-63.19168010	','	email	'	,1	);
insert into empresa_servicio values(	24	,'	BANCO FASSIL	','	CALLE ANTONIO VACA DIEZ	,	CALLE AROMA	','	-17.79731699	;	-63.19121890	','	email	'	,1	);
insert into empresa_servicio values(	25	,'	COOPERATIVA DE LA FAMILIA	','	CALLE MEXICO	,	AV. CAÑOTO	','	-17.79702021	;	-63.19091952	','	email	'	,1	);
insert into empresa_servicio values(	26	,'	BANCO ECO FUTURO	','	C/ RAFAEL PEÑA	,	C/ ESPAÑA	','	-17.78231638	;	-63.18341785	','	email	'	,1	);
insert into empresa_servicio values(	27	,'	BANCO UNION	','	C/ CUELLAR	,	C/ 21 DE MAYO	','	-17.78268351	;	-63.18297146	','	email	'	,1	);
insert into empresa_servicio values(	28	,'	BANCO SOLIDARIO S.A. BANCO SOL	','	C/ SEOANE	,	C/ 24 DE SEPTIEMBRE	','	-17.78436171	;	-63.18304570	','	email	'	,1	);
insert into empresa_servicio values(	29	,'	BANCO FASSIL	','	CALLE ARENALES	,	AVENIDA SANTA CRUZ	','	-17.79566089	;	-63.18943476	','	email	'	,1	);
insert into empresa_servicio values(	30	,'	BANCO PRODEM	','	CALLE CHARCAS	,	AVENIDA ARGOMOZA	','	-17.79209276	;	-63.17798349	','	email	'	,1	);
insert into empresa_servicio values(	31	,'	BANCO FASSIL	','	CALLE CHARCAS	,	AVENIDA ARGOMOZA	','	-17.79321079	;	-63.17952259	','	email	'	,1	);
insert into empresa_servicio values(	32	,'	BANCO SOL	','	CALLE CHARCAS	,	CALLE BENI	','	-17.79258414	;	-63.18103396	','	email	'	,1	);
insert into empresa_servicio values(	33	,'	BANCO FIE	','	CALLE CHARCAS	,	CALLE BENI	','	-17.79253021	;	-63.18063719	','	email	'	,1	);
insert into empresa_servicio values(	34	,'	BANCO GANADERO	','	CALLE CHARCAS	,	CALLE BENI	','	-17.79539613	;	-63.19290666	','	email	'	,1	);
insert into empresa_servicio values(	35	,'	BANCO BRASIL	','	CALLE CHARCAS	,	CALLE BENI	','	-17.79695520	;	-63.19029425	','	email	'	,1	);
insert into empresa_servicio values(	36	,'	BANCO BRASIL	','	CALLE CHARCAS	,	CALLE BENI	','	-17.79175567	;	-63.17846535	','	email	'	,1	);
insert into empresa_servicio values(	37	,'	BANCO SOL	','	C/ BUENOS AIRES	,	AV. CAÑOTO	','	-17.78661841	;	-63.18633367	','	email	'	,1	);
insert into empresa_servicio values(	38	,'	BANCO UNION S.A	','	CALLE FLORIDA	,	CALLE 24 DE SEPTIEMBRE	','	-17.78628112	;	-63.18502831	','	email	'	,1	);
insert into empresa_servicio values(	39	,'	BANCO FASSIL	','	C/ ARENALES	,	C/ MURILLO	','	-17.78652548	;	-63.18529195	','	email	'	,1	);
insert into empresa_servicio values(	40	,'	BANCO DE CREDITO BCP	','	CALLE FLORIDA	,	CALLE BENI	','	-17.77768944	;	-63.17963497	','	email	'	,1	);
insert into empresa_servicio values(	41	,'	BANCO UNION (CENTRAL);	','	CALLE FLORIDA	,	CALLE 24 DE SEPTIEMBRE	','	-17.78209082	;	-63.18025213	','	email	'	,1	);
insert into empresa_servicio values(	42	,'	AGENCIA ARENALES BANCO GANADERO	','	CALLE FLORIDA	,	CALLE BENI	','	-17.78635762	;	-63.18427998	','	email	'	,1	);
insert into empresa_servicio values(	43	,'	BANCO GANADERO CENTRAL	','	CALLE FLORIDA	,	CALLE BENI	','	-17.78650838	;	-63.18094950	','	email	'	,1	);
insert into empresa_servicio values(	44	,'	BANCO MERCANTIL SANTA CRUZ	','	CALLE FLORIDA	,	CALLE LIBERTAD	','	-17.78109888	;	-63.18088493	','	email	'	,1	);
insert into empresa_servicio values(	45	,'	BANCO FASSIL	','	CALLE FLORIDA	,	CALLE BENI	','	-17.78109888	;	-63.18088493	','	email	'	,1	);
insert into empresa_servicio values(	46	,'	BANCO DE LA NACION ARGENTINA	','	CALLE FLORIDA	,	CALLE 24 DE SEPTIEMBRE	','	-17.78109888	;	-63.18088493	','	email	'	,1	);
insert into empresa_servicio values(	47	,'	BANCO MERCANTIL SANTA CRUZ BODEGA DANIEL	','	AV. MELCHOR PINTO	,	AV. SANTA CRUZ	','	-17.78108319	;	-63.18146972	','	email	'	,1	);
insert into empresa_servicio values(	48	,'	COOPERATIVA JESUS NAZARENO	','	CALLE FLORIDA	,	CALLE LIBERTAD	','	-17.78099206	;	-63.18153585	','	email	'	,1	);
insert into empresa_servicio values(	49	,'	OFICINA DEL BANCO GANADERO	','	CALLE BOLIVAR	,	CALLE BENI	','	-17.77162258	;	-63.18279770	','	email	'	,1	);
insert into empresa_servicio values(	50	,'	BANCO LOS ANDES	','	CALLE BOLIVAR	,	CALLE BENI	','	-17.78365112	;	-63.17809877	','	email	'	,1	);
insert into empresa_servicio values(	51	,'	BANCO VISA	','	BOLIVAR	,	CAMPERO	','	-17.77304306	;	-63.18200807	','	email	'	,1	);
insert into empresa_servicio values(	52	,'	BANCO BISA	','	CALLE BOLIVAR	,	CALLE BENI	','	-17.78522680	;	-63.18129090	','	email	'	,1	);
insert into empresa_servicio values(	53	,'	BANCO MERCANTIL	','	CALLE SUCRE	,	CALLE POTOSI	','	-17.78161810	;	-63.18922034	','	email	'	,1	);
insert into empresa_servicio values(	54	,'	BANCO UNIÓN S.A	','	AV. MELCHOR PINTO	,	C/ PEDRO JOSÉ ARCE	','	-17.77657139	;	-63.17941995	','	email	'	,1	);
insert into empresa_servicio values(	55	,'	BANCO UNION SA	','	CALLE SUCRE	,	CALLE LA PAZ	','	-17.77747438	;	-63.17911040	','	email	'	,1	);
insert into empresa_servicio values(	56	,'	EINDESA SAM	','	CALLE AYACUCHO	,	CALLE VELASCO	','	-17.77483456	;	-63.18358923	','	email	'	,1	);
insert into empresa_servicio values(	57	,'	BANCO ECONOMICO CENTRAL	','	CALLE AYACUCHO	,	CALLE INDEPENDENCIA	','	-17.77225774	;	-63.18293380	','	email	'	,1	);
insert into empresa_servicio values(	58	,'	SUCURSAL BANCO UNION	','	CALLE AYACUCHO	,	CALLE VELASCO	','	-17.78385811	;	-63.18010327	','	email	'	,1	);
insert into empresa_servicio values(	59	,'	BANCO BISA	','	CALLE AYACUCHO	,	CALLE VALLEGRANDE	','	-17.77063289	;	-63.17430699	','	email	'	,1	);
insert into empresa_servicio values(	60	,'	BANCO FORTALEZA	','	CALLE BALLIVIAN	,	CALLE CHUQUISACA	','	-17.78798889	;	-63.18095099	','	email	'	,1	);
insert into empresa_servicio values(	61	,'	COOPERATIVA SAN MARTIN DE PORRES	','	AVENIDA LANDIVAR	,	CALLE ALFREDO JORDAN	','	-17.78190073	;	-63.18240991	','	email	'	,1	);
insert into empresa_servicio values(	62	,'	COOP. SAN MARTIN DE  PORRES	','	CALLE INGAVI	,	CALLE VELASCO	','	-17.78253404	;	-63.18246492	','	email	'	,1	);
insert into empresa_servicio values(	63	,'	BANCO FASSIL	','	CALLE INGAVI	,	CALLE VELASCO	','	-17.78222698	;	-63.18238663	','	email	'	,1	);
insert into empresa_servicio values(	64	,'	SUCRUSAL BANCO MERCANTIL SIETE CALLES	','	CALLE ISABEL LA CATOLICA	,	CALLE COLON	','	-17.78911440	;	-63.17163641	','	email	'	,1	);
insert into empresa_servicio values(	65	,'	BANCO ECONOMICO	','	CALLE SUAREZ DE FIGUEROA	,	CALLE CAMIRI	','	-17.78966396	;	-63.17194550	','	email	'	,1	);
insert into empresa_servicio values(	66	,'	BANCO PRODEM	','	CALLE SUAREZ DE FIGUEROA	,	CALLE VELASCO	','	-17.78997018	;	-63.17199683	','	email	'	,1	);
insert into empresa_servicio values(	67	,'	BNB	','	CALLE ÑUFLO DE CHAVEZ	,	CALLE CHUQUISACA	','	-17.78752304	;	-63.17175202	','	email	'	,1	);
insert into empresa_servicio values(	68	,'	BNB	','	CALLE ÑUFLO DE CHAVEZ	,	CALLE CHUQUISACA	','	-17.77492205	;	-63.17728836	','	email	'	,1	);
insert into empresa_servicio values(	69	,'	BNB	','	CALLE ÑUFLO DE CHAVEZ	,	CALLE CHUQUISACA	','	-17.77541113	;	-63.17969937	','	email	'	,1	);
insert into empresa_servicio values(	70	,'	BNB	','	CALLE ÑUFLO DE CHAVEZ	,	CALLE CHUQUISACA	','	-17.77718617	;	-63.18407941	','	email	'	,1	);
insert into empresa_servicio values(	71	,'	BNB	','	CALLE ÑUFLO DE CHAVEZ	,	CALLE CHUQUISACA	','	-17.77585782	;	-63.18352797	','	email	'	,1	);
insert into empresa_servicio values(	72	,'	BANCO DE CREDITO	','	CALLE SUAREZ DE FIGUEROA	,	CALLE CAMIRI	','	-17.79369688	;	-63.17993478	','	email	'	,1	);
insert into empresa_servicio values(	73	,'	BNB BANCO NACIONAL DE BOLIVIA	','	CALLE SUAREZ DE FIGUEROA	,	ISABEL LA CATOLICA	','	-17.78040909	;	-63.18226376	','	email	'	,1	);
insert into empresa_servicio values(	74	,'	OFICINAS DEL BANCO NACIONAL	','	CALLE SUAREZ DE FUGUEROA	,	CALLE RENÉ MORENO	','	-17.77929242	;	-63.18830807	','	email	'	,1	);
insert into empresa_servicio values(	75	,'	BANCA DE CREDITO BCP	','	CALLE MANUEL I. SALVATIERRA	,	AVENIDA VIEDMA 1ER ANILLO	','	-17.79497840	;	-63.18069430	','	email	'	,1	);
insert into empresa_servicio values(	76	,'	BANCO FASIL	','	C/ REPUBLIQUETAS	,	C/ CHUQUISACA	','	-17.79825728	;	-63.17916038	','	email	'	,1	);
insert into empresa_servicio values(	77	,'	BANCO GANADERO ERICKA SUAREZ	','	CALLE GENERAL SAAVEDRA	,	AVENIDA VIEDMA	','	-17.79846552	;	-63.17839603	','	email	'	,1	);
insert into empresa_servicio values(	78	,'	COOPERATIVA LA MERCED LTDA	','	CALLE MARIO FLORES	,	CALLE ADRIAN MELGAR	','	-17.78228142	;	-63.18086583	','	email	'	,1	);
insert into empresa_servicio values(	79	,'	BANCO UNION	','	CALLE GENERAL SAAVEDRA	,	AVENIDA VIEDMA	','	-17.78228142	;	-63.18086583	','	email	'	,1	);
insert into empresa_servicio values(	80	,'	BANCO MERCANTIL SANTA CRUZ	','	CALLE GENERAL SAAVEDRA	,	AVENIDA VIEDMA	','	-17.78243050	;	-63.18120438	','	email	'	,1	);
insert into empresa_servicio values(	81	,'	BANCO BISA	','	C/ GRAL. SAAVEDRA	,	C/ LA PAZ	','	-17.78214869	;	-63.18143309	','	email	'	,1	);
insert into empresa_servicio values(	82	,'	BANCO UNION	','	AVENIDA IRALA	,	AVENIDA LAS AMERICAS	','	-17.78282741	;	-63.18062800	','	email	'	,1	);
insert into empresa_servicio values(	83	,'	BANCO FASSIL	','	CHIRIGUANOS	,	VITUPUE	','	-17.78324957	;	-63.18063284	','	email	'	,1	);
insert into empresa_servicio values(	84	,'	BANCO FORTALEZA	','	CHIRIGUANOS	,	VITUPUE	','	-17.78289259	;	-63.18146803	','	email	'	,1	);
insert into empresa_servicio values(	85	,'	BANCO FASSIL	','	AVENIDA IRALA	,	AVENIDA RENE MORENO	','	-17.77554534	;	-63.18188261	','	email	'	,1	);
insert into empresa_servicio values(	86	,'	BANCO MERCANTIL SANTA CRUZ	','	AVENIDA IRALA	,	AVENIDA RENE MORENO	','	-17.77503478	;	-63.18005337	','	email	'	,1	);
insert into empresa_servicio values(	87	,'	BANCO MERCANTIL SANTA CRUZ	','	AVENIDA IRALA	,	AVENIDA RENE MORENO	','	-17.79571943	;	-63.18187222	','	email	'	,1	);
insert into empresa_servicio values(	88	,'	BANCO MERCANTIL SANTA CRUZ	','	AVENIDA IRALA	,	AVENIDA RENE MORENO	','	-17.78264854	;	-63.16544816	','	email	'	,1	);
insert into empresa_servicio values(	89	,'	BANCO NACIONAL DE BOLIVIA BNB	','	CALLE MURICHI	,	CALLE ISABEL LA CATOLICA	','	-17.78672089	;	-63.18165931	','	email	'	,1	);
insert into empresa_servicio values(	90	,'	BANCO NACIONAL DE BOLIVIA BNB	','	AVENIDA IRALA	,	AVENIDA MONSEÑOR SANTIESTEVAN	','	-17.78320468	;	-63.17698219	','	email	'	,1	);
insert into empresa_servicio values(	91	,'	BANCO SOL	','	CALLE DIEGO DE MENDOZA	,	AVENIDA MONSEÑOR SANTIESTEVAN	','	-17.78413305	;	-63.18379696	','	email	'	,1	);
insert into empresa_servicio values(	92	,'	BANCO ECONOMICO	','	CALLE GUARAYOS	,	CALLE SUTO	','	-17.78465385	;	-63.18447225	','	email	'	,1	);
insert into empresa_servicio values(	93	,'	BANCO GANADERO	','	CALLE ANDRES MANSO	,	CALLE RENE MORENO	','	-17.78074951	;	-63.17278414	','	email	'	,1	);
insert into empresa_servicio values(	94	,'	BANCO PRODEM	','	CALLE GUARAYOS	,	CALLE SUTO	','	-17.78068265	;	-63.17293970	','	email	'	,1	);
insert into empresa_servicio values(	95	,'	BANCO DE CREDITO DE BOLIVIA	','	CALLE GUARAYOS	,	CALLE YOTAU	','	-17.78591152	;	-63.18467228	','	email	'	,1	);
insert into empresa_servicio values(	96	,'	COOPERATIVA EL PAURO	','	AV. GRIGOTA	,	CALLE MUCHIRI	','	-17.78471750	;	-63.18593203	','	email	'	,1	);
insert into empresa_servicio values(	97	,'	BANCO FASSIL	','	CALLE SOLIZ DE OLGUIN	,	AVENIDA FRANCISCO VELARDE	','	-17.79487480	;	-63.19282684	','	email	'	,1	);
insert into empresa_servicio values(	98	,'	BANCO BISA (AGENCIA RAMADA);	','	SUTO	,	AVENIDA GRIGOTA	','	-17.79505299	;	-63.19284472	','	email	'	,1	);
insert into empresa_servicio values(	99	,'	BANCO DE DESARROLLO PRODUCTIVO MERCANTIL SANTA CRUZ	','	SUTO	,	AVENIDA GRIGOTA	','	-17.79642738	;	-63.19136695	','	email	'	,1	);
insert into empresa_servicio values(	100	,'	BANCO FIE (ADMINISTRACION);	','	AVENIDA GRIGOTA	,	CALLE REGIMIENTO LANZA	','	-17.79647810	;	-63.19141269	','	email	'	,1	);
insert into empresa_servicio values(	101	,'	BANCO FIE	','	AV. GRIGOTA	,	CALLE JOSE SALVATIERRA	','	-17.79247591	;	-63.19040254	','	email	'	,1	);
insert into empresa_servicio values(	102	,'	COOPERATIVA LA MERCED	','	AV. GRIGOTA	,	CALLE JOSE SALVATIERRA	','	-17.79230343	;	-63.19020234	','	email	'	,1	);
insert into empresa_servicio values(	103	,'	ECOFUTURO	','	AVENIDA ISABEL LA CATOLICA	,	CALLE LA GUARDIA	','	-17.79736363	;	-63.19246132	','	email	'	,1	);
insert into empresa_servicio values(	104	,'	BANCO NACIONAL DE BOLIVIA	','	AV. GRIGOTA	,	CALLE JOSE SALVATIERRA	','	-17.79295400	;	-63.19189547	','	email	'	,1	);
insert into empresa_servicio values(	105	,'	COOPERATIVA DE AHORRO Y CREDITO EL PROGRESO	','	AV. GRIGOTA	,	CALLE JOSE SALVATIERRA	','	-17.78650838	;	-63.18094950	','	email	'	,1	);
insert into empresa_servicio values(	106	,'	BANCO SOL	','	CALLE ANTONIO SUAREZ	,	CALLE JOSE SALVATIERRA	','	-17.78650838	;	-63.18094950	','	email	'	,1	);
insert into empresa_servicio values(	107	,'	BANCO DE CREDITO	','	CALLE ELVIRA DE MENDOZA	,	AVENIDA MONSEÑOR SANTIESTEVAN	','	-17.78650838	;	-63.18094950	','	email	'	,1	);
insert into empresa_servicio values(	108	,'	COOPERATIVA FATIMA	','	CALLE ANTONIO SUAREZ	,	CALLE JOSE SALVATIERRA	','	-17.78650838	;	-63.18094950	','	email	'	,1	);
insert into empresa_servicio values(	109	,'	LOS ANDES PROCREDIT	','	CALLE BUMBERQUE	,	AVENIDA LAS AMERICAS	','	-17.79258414	;	-63.18103396	','	email	'	,1	);
insert into empresa_servicio values(	110	,'	COOPERATIVA DE AHORRO Y CREDITO COMERCIO LIMITADA	','	CALLE ANTONIO SUAREZ	,	CALLE JOSE SALVATIERRA	','	-17.79258414	;	-63.18103396	','	email	'	,1	);

--CAJEROS
insert into empresa_servicio values(111,'CAJERO DEL BANCO FASSIL','CALLE UNOAVENIDA 2 DE AGOSTO','-17.73977888-;63.14760721','email',2);
insert into empresa_servicio values(112,'CAJEROS DEL BANCO FASSIL','CALLE SIN NOMBREAVENIDA 23 DE SEPTIEMBRE','-17.72880315;-63.16618819','email',2);
insert into empresa_servicio values(113,'CAJERO BANCO UNION','CALLE GUATEMALACALLE VENEZUELA','-17.77768192;-63.19166544','email',2);
insert into empresa_servicio values(114,'CAJERO JESUS NAZARENO','CALLE GUATEMALACALLE VENEZUELA','-17.77768192;-63.19166544','email',2);
insert into empresa_servicio values(115,'CAJERO AUTOMATICO "BANCO UNION"','C/ CUELLARC/ 21 DE MAYO','-17.77927657;-63.18492400','email',2);
insert into empresa_servicio values(116,'CAJERO FASSIL','AV. CAÑOTOC/ 24 DE SEPTIEMBRE','-17.77531371;-63.18271654','email',2);
insert into empresa_servicio values(1117,'CAJERO MERCANTIL','AV. CAÑOTOC/ 24 DE SEPTIEMBRE','-17.77527864;-63.18249846','email',2);
insert into empresa_servicio values(118,'CAJERO FASSIL','AV. CAÑOTOC/ 24 DE SEPTIEMBRE','-17.77548257;-63.18241257','email',2);
insert into empresa_servicio values(119,'CAJERO DE BANCO GANADERO','C/ JUNINC/ LIBERTAD','-17.78322243;-63.18349742','email',2);
insert into empresa_servicio values(120,'CAJERO DEL BANCO BISA','CALLE SANTA FEAVENIDA MONSEÑOR RIVERO','-17.77225774;-63.18293380','email',2);
insert into empresa_servicio values(121,'CAJEROS DEL BANCO UNION','CALLE FLORIDACALLE 24 DE SEPTIEMBRE','-17.78222698;-63.18238663','email',2);
insert into empresa_servicio values(122,'CAJERO BANCO NACIONAL DE BOLIVIA BNB','AVENIDA CENTENARIOCALLE REYES CARDONA','-17.77961827;-63.19332745','email',2);
insert into empresa_servicio values(123,'CAJERO AUTOMATICO BNB','CALLE ISABEL LA CATOLICACALLE COLON','-17.78584213;-63.18495023','email',2);
insert into empresa_servicio values(124,'CAJERO AUTOMATICO BNB','CALLE ISABEL LA CATOLICACALLE COLON','-17.78584213;-63.18495023','email',2);
insert into empresa_servicio values(125,'CAJERO AUTOMATICO BCP','AVENIDA ISABEL LA CATOLICACALLE LA GUARDIA','-17.79705215;-63.19193530','email',2);

--HOSPITALES
insert into empresa_servicio values(126,'	HOSPITAL CATOLICO FRANCISCANO DE MARÍA	','	AVENIDA 6TO ANILLO	AVENIDA PROLONGACIÓN BENI	','	-17.73625329;	-63.16143500	','	email	',3 );
insert into empresa_servicio values(127,'	CAJA PETROLERA DE SALUD (OFICINA);	','	C/ ANDRES IBAÑEZ	C/ 21 DE MAYO	','	-17.77716226;	-63.18518246	','	email	', 3);
insert into empresa_servicio values(128,'	CAJA NACIONAL DE SALUD	','	AVENIDA IRALA	AVENIDA MONSEÑOR SANTIESTEVAN	','	-17.79256773;	-63.18008479	','	email	', 3);
insert into empresa_servicio values(129,'	CAJA NACIONAL DE SALUD	','	CALLE SUCRE	CALLE TARIJA	','	-17.78423908;	-63.17671427	','	email	', 3);
insert into empresa_servicio values(130,'	HOSPITAL MATERNO INFANTIL	','	AV, CAÑOTO	C/ ESPAÑA	','	-17.77767968;	-63.18719113	','	email	', 3);
insert into empresa_servicio values(131,'	CAJA PETROLERA DE SALUD HOSPITAL SANTA CRUZ	','	AV, CAÑOTO	C/ ESPAÑA	','	-17.77718746;	-63.18614895	','	email	', 3);
insert into empresa_servicio values(132,'	HOSPITAL DE NIÑOS DOCTOR MARIO ORTIZ SUAREZ	','	C/ SEOANE	C/ SANTA BARBARA	','	-17.78071689;	-63.18665244	','	email	', 3);
insert into empresa_servicio values(133,'	HOSPITAL SAN JUAN DE DIOS	','	C/ RAFAEL PEÑA	C/ ESPAÑA	','	-17.77870174;	-63.18606997	','	email	', 3);
insert into empresa_servicio values(134,'	HOSPITAL DE LA MUJER DR PERCY BOLAND	','	C/ RAFAEL PEÑA	C/ ESPAÑA	','	-17.77880780;	-63.18720213	','	email	', 3);
insert into empresa_servicio values(135,'	CAJA PETROLERA DE SALUD (OFICINA ADMINISTRATIVAS);	','	CALLE MONSEÑOR SALVATIERRA	CALLE INDEPENDENCIA	','	-17.78969260;	-63.18255294	','	email	', 3);

--CENTROS DE SALUD
insert into empresa_servicio values(136,	'CENTRO DE SALUD POCHOLA TRAPERO	','	AVENIDA CLARACUTA	CALLE CLARACUTA	','	-17.73308820;	-63.15594140	','	email	',4 );
insert into empresa_servicio values(137, 'CENTRO DE SALUD ANITA LEIGUE PUBLICO	','	CALLE FERBO	CALLE SAN JORGE	','	-17.73701861;	-63.17168849	','	email	', 4);
insert into empresa_servicio values(138,	'CENTRO DE SALUD LOS TUSEQUIS PARA EL ADULTO MAYOR	','	CALLE GERMAN GREENE	AV. EL CARMEN	','	-17.74207399;	-63.15510427	','	email	', 4);
insert into empresa_servicio values(139,	'CENTRO DE SALUD UNIVERSITARIO NORTE	','	AV. VIRU VIRU	AV. PRINCIPAL	','	-17.72193300;	-63.15962164	','	email	', 4);


--AGENCIAS DE TURISMO
--insert into empresa_servicio values(140,'AGENCIA DE VIAJES ADONAJ	','	CALLE CELIA MARCO	CALLE ALICAI SUAREZ	','	-17.75056992	-63.16598237	','0', null);
insert into empresa_servicio values(1,'ANAHI TRAVEL:AGENCIA DE VIAJES Y TURISMO	','	CALLE PERU	AV. CAÑOTO	','	-17.77581693	-63.18652977	','0', null);
insert into empresa_servicio values(2,'AGENCIA DE VIAJES TRAVEL	','	CALLE PERU	AV. CAÑOTO	','	-17.77597176	-63.18647477	','0', null);
insert into empresa_servicio values(3,'ROSSY TOURS	','	CALLE LA BAHIA	CALLE NICOLAS SUAREZ	','	-17.78179862	-63.16723197	','0', null);
insert into empresa_servicio values(4,'AGENCIA DE VIAJES ALTAMISA	','	CALLE BAHIA	CALLE JOAQUIN DE VELASCO	','	-17.78236278	-63.16807872	','0', null);
insert into empresa_servicio values(5,'GUIRA GUIRA TRABEL	','	C/ ANDRES IBAÑEZ	C/ 24 DE SEPTIEMBRE	','	-17.77664196	-63.18232077	','0', null);
insert into empresa_servicio values(6,'BOLITRIP AGENCIA DE VIAJES	','	C/ ANDRES IBAÑEZ	C/ 24 DE SEPTIEMBRE	','	-17.77722647	-63.18226569	','0', null);
insert into empresa_servicio values(7,'AV PAIR	','	CALLE CHARCAS	CALLE CHIQUITOS	','	-17.77975803	-63.17237674	','0', null);
insert into empresa_servicio values(8,'AGENCIA SAMI TRAVEL	','	C/ RAFAEL PEÑA	C/ LIBERTAD	','	-17.77786642	-63.18324880	','0', null);
insert into empresa_servicio values(9,'GAMA TOURS	','	CALLE CHARCAS	CALLE AVAROA	','	-17.78105318	-63.17606130	','0', null);
insert into empresa_servicio values(10,'B Y B TRAVEL	','	CALLE FLORIDA	CALLE LIBERTAD	','	-17.78258333	-63.18364460	','0', null);
insert into empresa_servicio values(11,'EL REFUGIO LOS VOLCANES	','	CALLE FLORIDA	CALLE LIBERTAD	','	-17.78258333	-63.18364460	','0', null);
insert into empresa_servicio values(12,'AGENCIA DE VIAJES ANDALUZ	','	CALLE AYACUCHO	CALLE INDEPENDENCIA	','	-17.78468233	-63.18271721	','0', null);
insert into empresa_servicio values(13,'SUN TSLAND TOURS AGENCIA DE VIAJES	','	CALLE BOLIVAR	CALLE QUIJARRO	','	-17.78259337	-63.17764161	','0', null);
insert into empresa_servicio values(14,'CHIRIGUANO TOURS VIAJES Y TURISMO	','	CALLE ARENALES	CALLE BARRON	','	-17.78114418	-63.17402154	','0', null);
insert into empresa_servicio values(15,'AGENCIA CALIWORLD TRAVEL	','	CALLE AYACUCHO	CALLE COLON	','	-17.78418337	-63.18565311	','0', null);
insert into empresa_servicio values(16,'VALLE TOURS	','	CALLE SUAREZ DE FIGUEROA	ISABEL LA CATOLICA	','	-17.78645388	-63.18657196	','0', null);
insert into empresa_servicio values(17,'TURISMO ENLACE	','	C/ WARNES	C/ LA PAZ	','	-17.78684755	-63.17939829	','0', null);
insert into empresa_servicio values(18,'AGENCIA CASA BLANCA	','	CALLE SUAREZ DE FIGUEROA	CALLE INDEPENDENCIA	','	-17.78691228	-63.18242773	','0', null);
insert into empresa_servicio values(19,'AGENCIA TOURS VIACON	','	CALLE SUAREZ DE FIGUEROA	CALLE INDEPENDENCIA	','	-17.78611977	-63.18339277	','0', null);
insert into empresa_servicio values(20,'LAS MISIONES VIAJES Y TURISMO	','	CALLE CABALLERO	CALLE MURILLO	','	-17.77996230	-63.18064685	','0', null);
insert into empresa_servicio values(21,'ROSARIO TOURS	','	C/ ARENALES	C/ MURILLO	','	-17.78179615	-63.17966756	','0', null);
insert into empresa_servicio values(22,'DILENT RANEL	','	CALLE BALLIVIAN	AVENIDA VIEDMA	','	-17.78433372	-63.17306884	','0', null);
insert into empresa_servicio values(23,'AGENCIA BOLIVIA TUR	','	CALLE CHARCAS	CALLE MURILLO	','	-17.78112563	-63.17995161	','0', null);
insert into empresa_servicio values(24,'AGENCIA TURISMO BALAS	','	CALLE CHARCAS	CALLE MURILLO	','	-17.78147502	-63.18051840	','0', null);
insert into empresa_servicio values(25,'MAXI TURISMO	','	C/ ÑUFLO DE CHAVEZ	C/ COBIJA	','	-17.78542568	-63.17549825	','0', null);
insert into empresa_servicio values(26,'FREWAY	','	CALLE FORTIN TOLEDO	CALLE ALIGUATA	','	-17.77385664	-63.18770436	','0', null);
insert into empresa_servicio values(27,'VIA LIBRE	','	CALLE BALLIVIAN	CALLE COCHABAMBA	','	-17.78469916	-63.17826732	','0', null);
insert into empresa_servicio values(28,'AGENCIA DE VIAJES GIRA TOURS	','	CALLE BALLIVIAN	CALLE COCHABAMBA	','	-17.78523683	-63.17844508	','0', null);
insert into empresa_servicio values(29,'AGENCIA	','	CALLE SUCRE	CALLE COCHABAMBA	','	-17.78446006	-63.17898793	','0', null);
insert into empresa_servicio values(30,'MAREA TOUR S.R.L	','	CALLE ÑUFLO DE CHAVEZ	CALLE CHUQUISACA	','	-17.78646489	-63.18033265	','0', null);
insert into empresa_servicio values(31,'RUMBO VIAJES Y TURISMO	','	CALLE ARENALES	CALLE AROMA	','	-17.78160759	-63.17858795	','0', null);
insert into empresa_servicio values(32,'AGENCIA DE VIAJES BAC	','	CALLE CAÑADA STRONGER	CALLE INDEPENDENCIA	','	-17.77325781	-63.18425776	','0', null);
insert into empresa_servicio values(33,'AGENCIA DE VIAJES	','	CALLE CELSO CASTEDO	CALLE AROMA	','	-17.77654080	-63.17987860	','0', null);
insert into empresa_servicio values(34,'AGENCIA DE VIAJES	','	CALLE PROLONGACION QUIJARRO	AVENIDA URUGUAY	','	-17.77417143	-63.17944122	','0', null);
insert into empresa_servicio values(35,'MENNO TRAVEL SRL.	','	AVENIDA URUGUAY	CALLE BARRON	','	-17.77630232	-63.17529388	','0', null);
insert into empresa_servicio values(36,'AGENCIA DE VIAJES CARZON	','	CALLE JUAN DE GARAY	AVENIDA VELARDE	','	-17.79660305	-63.18123998	','0', null);
insert into empresa_servicio values(37,'GOLDY TOURS	','	CALLE BALLIVIAN	CALLE CHUQUISACA	','	-17.78528562	-63.18039128	','0', null);
insert into empresa_servicio values(38,'GOLDEN TOURS	','	CALLE BALLIVIAN	CALLE CHUQUISACA	','	-17.78563959	-63.18042695	','0', null);
insert into empresa_servicio values(39,'BOA AEROMUNDO TRAVEL	','	CALLE PROLONGACION AROMA	AVENIDA URUGUAY	','	-17.77421490	-63.18026018	','0', null);
insert into empresa_servicio values(40,'GUAJOJO TOURS AGENCIA DE VIAJES Y TURISMO	','	AVENIDA IRALA	AVENIDA EJERCITO NACIONAL	','	-17.79313913	-63.18386856	','0', null);
insert into empresa_servicio values(41,'PANORAMA TOURS	','	CALLE ÑUFLO DE CHAVEZ	CALLE POTOSI	','	-17.78576607	-63.17705918	','0', null);
insert into empresa_servicio values(42,'EL DUDMO TOUR SRL.	','	C/ JUNIN	C/ LIBERTAD	','	-17.78307967	-63.18342629	','0', null);
insert into empresa_servicio values(43,'EURO TRAVEL	','	C/ JUNIN	C/ LIBERTAD	','	-17.78307967	-63.18342629	','0', null);
insert into empresa_servicio values(44,'F&E	','	C/ ALAMEDA JUNIN	AVENIDA CAÑOTO	','	-17.78415627	-63.18942492	','0', null);
insert into empresa_servicio values(45,'ECO VIAJES	','	AVENIDA CENTENARIO	AVENIDA CAÑOTO	','	-17.78077484	-63.18960308	','0', null);
insert into empresa_servicio values(46,'UNIVERSAL TOUR	','	AVENIDA CENTENARIO	AVENIDA CAÑOTO	','	-17.78077484	-63.18960308	','0', null);
insert into empresa_servicio values(47,'INFO TURS	','	CALLE SUCRE	CALLE TARIJA	','	-17.78373775	-63.17689794	','0', null);
insert into empresa_servicio values(48,'TROPICAL TURS AGENTE S	','	CALLE SUCRE	CALLE TARIJA	','	-17.78417296	-63.17619031	','0', null);
insert into empresa_servicio values(49,'DESTINITY TRAVEL	','	CALLE ÑUNFLO DE CHAVEZ	CALLE ORURO	','	-17.78530552	-63.17341093	','0', null);
insert into empresa_servicio values(50,'CHOVY TOURS	','	CALLE ANTONIO VACA DIEZ	CALLE QUIJARRO	','	-17.77705562	-63.17937456	','0', null);
insert into empresa_servicio values(51,'TRAVEL TOURS SRL.	','	6 DE AGOSTO	BARRON	','	-17.77673674	-63.17489873	','0', null);
insert into empresa_servicio values(52,'AVENTURA TRAVEL	','	AV/CRISTOBAL DE MENDOZA	CALLE LIBERTAD	','	-17.77194057	-63.18580108	','0', null);
insert into empresa_servicio values(53,'AGENCIA DE VIAJES ZURUCH	','	AV. GERMAN BUSH	CALLE LIBERTAD	','	-17.77500876	-63.18362120	','0', null);
insert into empresa_servicio values(54,'GIRA TOURS 	','	AV. GERMAN BUSH	CALLE LIBERTAD	','	-17.77504706	-63.18381074	','0', null);
insert into empresa_servicio values(55,'AGENCIA DE VIAJES SHIMA TOURS	','	CALLE CAÑADA ESTRONGEST	CALLE FORTIN CORRALES	','	-17.77299026	-63.18579499	','0', null);
insert into empresa_servicio values(56,'AGENCIA DE VIAJES Y TURISMO WOEC YORK	','	CALLE BALLIVIAN	CALLE TARIJA	','	-17.78453325	-63.17603741	','0', null);
insert into empresa_servicio values(57,'AGENCIA DE VENTA Y SERVICIOS TAN	','	CALLE BALLIVIAN	CALLE TARIJA	','	-17.78506849	-63.17681179	','0', null);
insert into empresa_servicio values(58,'ORIENTAL TOURS	','	CALLE ÑUFLO DE CHAVEZ	CALLE LA PAZ	','	-17.78637320	-63.17997684	','0', null);
insert into empresa_servicio values(59,'GALYA TOURS EMPRESA DE VIAJE Y TURISMO	','	CALLE BALLIVIAN	CALLE LA PAZ	','	-17.78520203	-63.18001545	','0', null);
insert into empresa_servicio values(60,'AGENCIA VIRU VIRU	','	CALLE SUCRE	CALLE CHUQUISACA	','	-17.78445554	-63.18050792	','0', null);
insert into empresa_servicio values(61,'AGENCIA DE VIAJES CARDINAL  ASSISTANCE	','	C/ REPUBLIQUETAS	C/ CHUQUISACA	','	-17.78799989	-63.18054927	','0', null);
insert into empresa_servicio values(62,'AGENCIA DE VIAJES AIR FRANCE	','	C/ MANUEL IGNACIO SALVATIERRA	C/ CHUQUISACA	','	-17.78904346	-63.18075145	','0', null);
insert into empresa_servicio values(63,'AGENCIA DE VIAJES MARE TRAVEL	','	CALLE ONSEÑO SALVATIERRA	C/ POTOSI	','	-17.78818391	-63.17677325	','0', null);
insert into empresa_servicio values(64,'TILUCHI TOURS	','	C/ TTE. MAMERTO CUELLAR	C/ SIN NOMBRE	','	-17.79554181	-63.17175347	','0', null);
insert into empresa_servicio values(65,'LUTFHANSA	','	CALLE FLORIDA	CALLE 24 DE SEPTIEMBRE	','	-17.78193503	-63.18184504	','0', null);
insert into empresa_servicio values(66,'AGENCIA DE VIAJES TRAMITUR	','	CALLE FLORIDA	CALLE 24 DE SEPTIEMBRE	','	-17.78238623	-63.18263047	','0', null);
insert into empresa_servicio values(67,'AEROMUNDO TRAVEL	','	CALLE JUNIN	CALLE ESPAÑA	','	-17.78307576	-63.18504958	','0', null);
insert into empresa_servicio values(68,'VISION MUNDIAL	','	CALLE JUNIN	CALLE ESPAÑA	','	-17.78307576	-63.18504958	','0', null);
insert into empresa_servicio values(69,'AGENCIA DE VIAJES GRINGA TOURS	','	CALLE JUNIN	CALLE SARA	','	-17.78326554	-63.18863441	','0', null);
insert into empresa_servicio values(70,'IKOVE TOURS	','	CALLE FLORIDA	CALLLE ESPAÑA	','	-17.78276693	-63.18503772	','0', null);
insert into empresa_servicio values(71,'AGENCIA DE VIAJES ALAMOS TOURS	','	CALLE FLORIDA	CALLLE ESPAÑA	','	-17.78269168	-63.18536006	','0', null);
insert into empresa_servicio values(72,'AGENCIA DE VIAJES SMTRAVEL SERVICE	','	CALLE REPUBLIQUETA	CALLE TARIJA	','	-17.78728808	-63.17537624	','0', null);
insert into empresa_servicio values(73,'AGENCIA DE VIAJES TARIJA TOURS	','	CALLE REPUBLIQUETA	CALLE TARIJA	','	-17.78728808	-63.17537624	','0', null);
insert into empresa_servicio values(74,'AGENCIA DE VIAJES BOA	','	CALLE MANUEL I. SALVATIERRA	AVENIDA VIEDMA 1ER ANILLO	','	-17.78694622	-63.17193658	','0', null);
insert into empresa_servicio values(75,'AGENCIA DE VIAJES SEVEN TOURS	','	CALLE MANUEL I. SALVATIERRA	AVENIDA VIEDMA 1ER ANILLO	','	-17.78719642	-63.17267297	','0', null);
insert into empresa_servicio values(76,'TURISMO TUJURUL	','	C/ RAFAEL	C/ 24 DE SEPTIEMBRE	','	-17.77817091	-63.18271685	','0', null);
insert into empresa_servicio values(77,'ALL TOURS SRL	','	C/ CUELLAR	C/ 24 DE SEPTIEMBRE	','	-17.77964699	-63.18282791	','0', null);
insert into empresa_servicio values(78,'CAMIL TRAVEL	','	C/ CUELLAR	C/ 24 DE SEPTIEMBRE	','	-17.77951357	-63.18278518	','0', null);
insert into empresa_servicio values(79,'AGENCIA DE VIAJES TRANSVEL WHEREWER	','	C/ ANDRES IBAÑEZ	C/LIBERTAD	','	-17.77679303	-63.18408761	','0', null);
insert into empresa_servicio values(80,'AGENCIA DE VIAJES CARIBBEAN TRAVEL	','	C/ ANDRES IBAÑEZ	C/LIBERTAD	','	-17.77753497	-63.18336254	','0', null);
insert into empresa_servicio values(81,'RUTA VERDE	','	C/ SEOANE	C/ LIBERTAD	','	-17.78059567	-63.18374960	','0', null);
insert into empresa_servicio values(82,'CHONY TOURS	','	CALLE ELVIRA DE MENDOZA	AVENIDA MONSEÑOR SANTIESTEVAN	','	-17.79825728	-63.17916038	','0', null);
insert into empresa_servicio values(83,'TAM VENTA DE PASAJES	','	AVENIDA FINAL ANA BARBA	CALLE RENE MORENO	','	-17.79840931	-63.17973354	','0', null);
insert into empresa_servicio values(84,'BOA BOLIVIANA DE AVIACION 	','	CALLE BUMBERQUE	AVENIDA LAS AMERICAS	','	-17.79846552	-63.17839603	','0', null);
insert into empresa_servicio values(85,'VIAJES Y SERVICIOS TURISMO SURUTU	','	CELSO CASTEDO	BENI	','	-17.77626811	-63.18188920	','0', null);
insert into empresa_servicio values(86,'AGENCIA DE VIAJE BOA (BOLIVIANA DE AVACION);	','	CELSO CASTEDO	BENI	','	-17.77638673	-63.18141647	','0', null);
insert into empresa_servicio values(87,'AGENCIA DE VIAJE IMAGINATE	','	CELSO CASTEDO	BENI	','	-17.77721397	-63.18137576	','0', null);
insert into empresa_servicio values(88,'VELKENS	','	CALLE BOLIVAR	CALLE BENI	','	-17.78299339	-63.18107053	','0', null);
insert into empresa_servicio values(89,'GOLONDRINA TOURS SRL	','	CALLE BOLIVAR	CALLE BENI	','	-17.78299339	-63.18107053	','0', null);
insert into empresa_servicio values(90,'ABAVIT	','	CALLE BOLIVAR	CALLE BENI	','	-17.78299339	-63.18107053	','0', null);
insert into empresa_servicio values(91,'YYAMBAE TOURS	','	CALLE BOLIVAR	CALLE BENI	','	-17.78349308	-63.18071126	','0', null);
insert into empresa_servicio values(92,'ALMUNDO TRAVEL	','	AVENIDA URUGUAY	CALLE BENI	','	-17.77585070	-63.18141725	','0', null);
insert into empresa_servicio values(93,'BOA(AGENCIA DE VIAJES Y TURISMO);	','	CALLE PROLONGACION AROMA	AVENIDA URUGUAY	','	-17.77380983	-63.18032632	','0', null);
insert into empresa_servicio values(94,'BOA (AGENCIAS DE VIAJES Y TURISMO);	','	CALLE PROLONGACION AROMA	AVENIDA URUGUAY	','	-17.77380983	-63.18032632	','0', null);
insert into empresa_servicio values(95,'A VIAJAR.COM SRL	','	CALLE PROLONGACION AROMA	AVENIDA URUGUAY	','	-17.77380983	-63.18032632	','0', null);
insert into empresa_servicio values(96,'TRAMITUR AGENCIA DE VIAJE	','	CALLE PROLONGACION AROMA	AVENIDA URUGUAY	','	-17.77380983	-63.18032632	','0', null);
insert into empresa_servicio values(97,'AGENCIA SANTA CRUZ TOURS	','	CALLE INGAVI	CALLE RENE MORENO	','	-17.78537324	-63.18157576	','0', null);
insert into empresa_servicio values(98,'SOMAR TOURS VIAJES Y TURISMO	','	CALLE INGAVI	CALLE RENE MORENO	','	-17.78559302	-63.18149920	','0', null);
insert into empresa_servicio values(99,'BIG TOURS	','	CALLE INGAVI	CALLE RENE MORENO	','	-17.78575611	-63.18197513	','0', null);
insert into empresa_servicio values(100,'AGENCIA TOTAITU	','	CALLE SUAREZ DE FUGUEROA	CALLE RENÉ MORENO	','	-17.78606623	-63.18153687	','0', null);
insert into empresa_servicio values(101,'CORIS	','	CALLE SUAREZ DE FUGUEROA	CALLE RENÉ MORENO	','	-17.78672089	-63.18165931	','0', null);
insert into empresa_servicio values(102,'BARRY AGENCIA	','	CALLE SUAREZ DE FUGUEROA	CALLE RENÉ MORENO	','	-17.78672089	-63.18165931	','0', null);
insert into empresa_servicio values(103,'MSC CRUCEROS TRAUCACE ASISTENCE	','	CALLE SUAREZ DE FUGUEROA	CALLE RENÉ MORENO	','	-17.78672089	-63.18165931	','0', null);
insert into empresa_servicio values(104,'URBAN SCHOOL TBORS	','	CALLE SUAREZ DE FUGUEROA	CALLE RENÉ MORENO	','	-17.78672089	-63.18165931	','0', null);
insert into empresa_servicio values(105,'A Y R VIAJES Y TURISMO	','	CALLE SUAREZ DE FUGUEROA	CALLE RENÉ MORENO	','	-17.78672089	-63.18165931	','0', null);
insert into empresa_servicio values(106,'ASSIT TRAVEL BOA	','	AVENIDA LANDIVAR	AVENIDA CAÑOTO	','	-17.78493154	-63.18917751	','0', null);
insert into empresa_servicio values(107,'INTRA TOURS 	','	CALLE AYACUCHO	CALLE VELASCO	','	-17.78457125	-63.18387015	','0', null);
insert into empresa_servicio values(108,'AGENCIA DE VIAJES BILVAO	','	CALLE ARENALES	CALLE AVAROA	','	-17.78125033	-63.17493731	','0', null);
insert into empresa_servicio values(109,'AGENCIA DE VIAJES INTERVIAJES	','	CALLE CHARCAS	CALLE SIN NOMBRE	','	-17.78029526	-63.17102628	','0', null);
insert into empresa_servicio values(110,'VIVE AVENTURA BOLIVIA	','	CALLE BOLIVAR	AVENIDA ARGOMOZA	','	-17.78239733	-63.17331287	','0', null);
insert into empresa_servicio values(111,'SOLIZ TRAVEL AGENCIA DE VIAJE Y TURISMO	','	CALLE INGAVI	AVENIDA CORDILLERA	','	-17.78676338	-63.18827027	','0', null);
insert into empresa_servicio values(112,'AGENCIA DE VIAJE "BOA"	','	CALLE PARI	CALLE RENE MORENO	','	-17.78722959	-63.18199833	','0', null);
insert into empresa_servicio values(113,'SIBONEY AGENCIA DE VIAJES Y TURISMO	','	C/ PARAPETI	C/ VELASCO	','	-17.79025965	-63.18316004	','0', null);
insert into empresa_servicio values(114,'AGENCIA DE VIAJES DON PASCUAL	','	CALLE MURICHI	CALLE ISABEL LA CATOLICA	','	-17.79273207	-63.19114280	','0', null);
insert into empresa_servicio values(115,'AGENCIA DE CAMERON 	','	GENERAL SAAVEDRA	C/ INDEPENDENCIA	','	-17.79187004	-63.18181369	','0', null);
insert into empresa_servicio values(116,'ANAVIN BCD TRAVEL	','	CALLE MONSEÑOR SALVATIERRA	CALLE INDEPENDENCIA	','	-17.78990324	-63.18277066	','0', null);
insert into empresa_servicio values(117,'OFICINA DE AGENCIA DE VIAJES	','	CALLE MERCADO	CALLE INDEPENDENCIA	','	-17.78908259	-63.18213545	','0', null);
insert into empresa_servicio values(118,'OFC. DE AGENCIA DE VIAJE ZUIZA TRAVEL	','	CALLE MERCADO	CALLE INDEPENDENCIA	','	-17.78864580	-63.18285298	','0', null);
