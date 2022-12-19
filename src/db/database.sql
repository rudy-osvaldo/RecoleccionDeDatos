CREATE TABLE usuarios(
    id int(11) auto_increment not null,
    email varchar(255) not null,
    nombres varchar(255) not null,
    apellidos varchar(255) not null,
    pass varchar(255) null,
    rpass varchar(255) null,
    rol varchar(100) default 'user',
    public varchar(100) default 'no',

    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)

)ENGINE=InnoDb;


CREATE TABLE question_group(
    id int(11) auto_increment not null,
    title varchar(255) null,

    CONSTRAINT pk_question_group PRIMARY KEY(id)
)ENGINE=InnoDb;

-- grupo=1&page=1
CREATE TABLE ubicacion(
    id int(11) auto_increment not null,
    group_id int(11) not null,
    departamento varchar(100) null,
    provincia varchar(200) null,
    localidad varchar(200) null,
    calle varchar(200) null,
    kilometro varchar(200) null,
    piso varchar(200) null,

    CONSTRAINT pk_ubicacion PRIMARY KEY(id),
    CONSTRAINT fk_ubicacion__question_group FOREIGN KEY(group_id) REFERENCES question_group(id)
)ENGINE=InnoDb;


-- grupo=2&page=1 al grupo=2&page=7
CREATE TABLE section_1(
    id int(11) auto_increment not null,
    group_id int(11) not null,
    tipo_vivienda varchar(200) null,
    personas_presentes varchar(200) null,
    cantidad_personas varchar(200) null,
    motivo_entrevista varchar(200) null,
    gastos_alimentacion varchar(200) null,
    gastos_separados varchar(200) null,
    nombres_personas MEDIUMTEXT null,

    CONSTRAINT pk_section1 PRIMARY KEY(id),
    CONSTRAINT fk_section1__question_group FOREIGN KEY(group_id) REFERENCES question_group(id)
)ENGINE=InnoDb;


/*Respuestas de si o no*/
-- grupo=2&page=8
CREATE TABLE section_2(
    id int(11) auto_increment not null,
    group_id int(11) not null,
    caminar_subir varchar(200) null,
    recordar varchar(200) null,
    comunicarse varchar(200) null,
    oir varchar(200) null,
    ver varchar(200) null,
    comer varchar(200) null,

    CONSTRAINT pk_section2 PRIMARY KEY(id),
    CONSTRAINT fk_section2__question_group FOREIGN KEY(group_id) REFERENCES question_group(id)
)ENGINE=InnoDb;



/*Respuestas compuestas*/
-- grupo=2&page=9
CREATE TABLE section_3(
    id int(11) auto_increment not null,
    group_id int(11) not null,
    material_piso varchar(200) null,
    material_exterior varchar(200) null,
    techo_revestimiento varchar(200) null,
    agua varchar(200) null,
    agua_origen varchar(200) null,

    CONSTRAINT pk_section3 PRIMARY KEY(id),
    CONSTRAINT fk_section3__question_group FOREIGN KEY(group_id) REFERENCES question_group(id)
)ENGINE=InnoDb;


-- grupo=2&page=10
CREATE TABLE section_4(
    id int(11) auto_increment not null,
    group_id int(11) not null,
    letrina varchar(200) null,
    letrina_cantidad varchar(200) null,
    letrina_contenido varchar(200) null,
    letrina_desague varchar(200) null,
    para_cocinar varchar(200) null,
    ambientes_cantidad varchar(200) null,
    dormitorio_cantidad varchar(200) null,

    CONSTRAINT pk_section4 PRIMARY KEY(id),
    CONSTRAINT fk_section4__question_group FOREIGN KEY(group_id) REFERENCES question_group(id)
)ENGINE=InnoDb;


-- grupo=2&page=11 al grupo=2&page=12
CREATE TABLE section_5(
    id int(11) auto_increment not null,
    group_id int(11) not null,
    vivienda_propiedad varchar(200) null,
    vivienda_contenido varchar(200) null,
    internet_vivienda varchar(200) null,
    internet_celular varchar(200) null,
    internet_pc varchar(200) null,

    CONSTRAINT pk_section5 PRIMARY KEY(id),
    CONSTRAINT fk_section5__question_group FOREIGN KEY(group_id) REFERENCES question_group(id)
)ENGINE=InnoDb;


-- grupo=3&page=1
CREATE TABLE section_6(
    id int(11) auto_increment not null,
    group_id int(11) not null,
    nombre_completo varchar(255) null,
    sexo_nacer varchar(200) null,
    identidad_genero varchar(200) null,
    edad varchar(200) null,
    fecha_nacimiento varchar(200) null,
    establecimiento_educativo varchar(200) null,
    nivel_educativo varchar(200) null,

    CONSTRAINT pk_section6 PRIMARY KEY(id),
    CONSTRAINT fk_section6__question_group FOREIGN KEY(group_id) REFERENCES question_group(id)
)ENGINE=InnoDb;



-- grupo=3&page=2 al grupo=3&page=6
CREATE TABLE section_7(
    id int(11) auto_increment not null,
    group_id int(11) not null,
    grado_actual varchar(200) null,
    asistencia_educativa varchar(200) null,
    nivel_educativo_max varchar(200) null,
    nivel_completado varchar(200) null,
    grados_aprobados varchar(200) null,
    nacido_en varchar(200) null,

    CONSTRAINT pk_section7 PRIMARY KEY(id),
    CONSTRAINT fk_section7__question_group FOREIGN KEY(group_id) REFERENCES question_group(id)
)ENGINE=InnoDb;



-- grupo=3&page=7 al grupo=3&page=10
CREATE TABLE section_8(
    id int(11) auto_increment not null,
    group_id int(11) not null,
    departamento_nacido varchar(200) null,
    pais_nacido varchar(200) null,
    year_llegada_bolivia varchar(200) null,
    cinco_year_atras varchar(200) null,
    cinco_year_atras_departamento varchar(200) null,

    CONSTRAINT pk_section8 PRIMARY KEY(id),
    CONSTRAINT fk_section8__question_group FOREIGN KEY(group_id) REFERENCES question_group(id)
)ENGINE=InnoDb;



-- grupo=3&page=11 al grupo=3&page=13
CREATE TABLE section_9(
    id int(11) auto_increment not null,
    group_id int(11) not null,
    cobertura_salud varchar(200) null,
    cobro_pension varchar(200) null,
    tipo_cobro_pension varchar(200) null,
    descendiente_originario varchar(200) null,
    pueblo_originario varchar(200) null,
    entender_idioma_originario varchar(200) null,
    descendiente_afro varchar(200) null,

    CONSTRAINT pk_section9 PRIMARY KEY(id),
    CONSTRAINT fk_section9__question_group FOREIGN KEY(group_id) REFERENCES question_group(id)
)ENGINE=InnoDb;


-- grupo=3&page=14 al grupo=3&page=19
CREATE TABLE section_10(
    id int(11) auto_increment not null,
    group_id int(11) not null,
    trabajo_semana_pasada varchar(200) null,
    ayuda_semana_pasada varchar(200) null,
    asistencia_trabajo_semana_pasada varchar(200) null,
    trabajo_ultimas_cuatro_semanas varchar(200) null,
    trabajo_tipo_asistencia varchar(200) null,
    trabajo_descuento_jubilacion varchar(200) null,

    CONSTRAINT pk_section10 PRIMARY KEY(id),
    CONSTRAINT fk_section10__question_group FOREIGN KEY(group_id) REFERENCES question_group(id)
)ENGINE=InnoDb;


-- grupo=3&page=20 al grupo=3&page=22
CREATE TABLE section_11(
    id int(11) auto_increment not null,
    group_id int(11) not null,
    trabajo_aporte_jubilacion varchar(200) null,
    trabajo_actividad_empresa varchar(200) null,
    descripcion_actividad MEDIUMTEXT null,
    cantidad_hijos varchar(200) null,

    CONSTRAINT pk_section11 PRIMARY KEY(id),
    CONSTRAINT fk_section11__question_group FOREIGN KEY(group_id) REFERENCES question_group(id)
)ENGINE=InnoDb;



CREATE TABLE respuestas(
    id int(11) auto_increment not null,
    usuario_id int(11) not null,
    ubicacion_id int(11) not null,
    section1_id int(11) not null,
    section2_id int(11) not null,
    section3_id int(11) not null,
    section4_id int(11) not null,
    section5_id int(11) not null,
    section6_id int(11) not null,
    section7_id int(11) not null,
    section8_id int(11) not null,
    section9_id int(11) not null,
    section10_id int(11) not null,
    section11_id int(11) not null,

    CONSTRAINT pk_question_page PRIMARY KEY(id),
    CONSTRAINT fk_res__usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_res__ubicacion FOREIGN KEY(ubicacion_id) REFERENCES ubicacion(id),
    CONSTRAINT fk_res__section1 FOREIGN KEY(section1_id) REFERENCES section_1(id),
    CONSTRAINT fk_res__section2 FOREIGN KEY(section2_id) REFERENCES section_2(id),
    CONSTRAINT fk_res__section3 FOREIGN KEY(section3_id) REFERENCES section_3(id),
    CONSTRAINT fk_res__section4 FOREIGN KEY(section4_id) REFERENCES section_4(id),
    CONSTRAINT fk_res__section5 FOREIGN KEY(section5_id) REFERENCES section_5(id),
    CONSTRAINT fk_res__section6 FOREIGN KEY(section6_id) REFERENCES section_6(id),
    CONSTRAINT fk_res__section7 FOREIGN KEY(section7_id) REFERENCES section_7(id),
    CONSTRAINT fk_res__section8 FOREIGN KEY(section8_id) REFERENCES section_8(id),
    CONSTRAINT fk_res__section9 FOREIGN KEY(section9_id) REFERENCES section_9(id),
    CONSTRAINT fk_res__section10 FOREIGN KEY(section10_id) REFERENCES section_10(id),
    CONSTRAINT fk_res__section11 FOREIGN KEY(section11_id) REFERENCES section_11(id)
)ENGINE=InnoDb;


/* -- Insertar question_group -- */
INSERT INTO question_group VALUES(1, 'Ubicacion geografica de la vivienda');
INSERT INTO question_group VALUES(2, 'Carateristicas del hogar y de la vivienda');
INSERT INTO question_group VALUES(3, 'Carateristicas individuales de la poblacion');