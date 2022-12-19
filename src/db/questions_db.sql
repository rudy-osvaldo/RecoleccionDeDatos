SELECT 
	u.departamento, u.provincia, u.localidad, u.calle, u.kilometro, u.piso,
	s1.tipo_vivienda, s1.personas_presentes, s1.cantidad_personas, s1.motivo_entrevista, s1.gastos_alimentacion, s1.gastos_separados, s1.nombres_personas,
	s2.caminar_subir, s2.recordar, s2.comunicarse, s2.oir, s2.ver, s2.comer,
	s3.material_piso, s3.material_exterior, s3.techo_revestimiento, s3.agua, s3.agua_origen,
	s4.letrina, s4.letrina_cantidad, s4.letrina_cantidad, s4.letrina_desague, s4.para_cocinar, s4.ambientes_cantidad, s4.dormitorio_cantidad,
	s5.vivienda_propiedad, s5.vivienda_contenido, s5.internet_vivienda, s5.internet_celular, s5.internet_pc,
	s6.nombre_completo, s6.sexo_nacer, s6.identidad_genero, s6.edad, s6.fecha_nacimiento, s6.establecimiento_educativo, s6.nivel_educativo,
	s7.grado_actual, s7.asistencia_educativa, s7.nivel_educativo_max, s7.nivel_completado, s7.grados_aprobados, s7.nacido_en,
	s8.departamento_nacido, s8.pais_nacido, s8.year_llegada_bolivia, s8.cinco_year_atras, s8.cinco_year_atras_departamento,
	s9.cobertura_salud, s9.cobro_pension, s9.tipo_cobro_pension, s9.descendiente_originario, s9.pueblo_originario, s9.entender_idioma_originario, s9.descendiente_afro,
	s10.trabajo_semana_pasada, s10.ayuda_semana_pasada, s10.asistencia_trabajo_semana_pasada, s10.trabajo_ultimas_cuatro_semanas, s10.trabajo_tipo_asistencia, s10.trabajo_descuento_jubilacion,
	s11.trabajo_aporte_jubilacion, s11.trabajo_actividad_empresa, s11.descripcion_actividad, s11.cantidad_hijos
FROM respuestas
INNER JOIN ubicacion u
ON respuestas.ubicacion_id = u.id
INNER JOIN section_1 s1
ON respuestas.section1_id = s1.id
INNER JOIN section_2 s2
ON respuestas.section2_id = s2.id
INNER JOIN section_3 s3
ON respuestas.section3_id = s3.id
INNER JOIN section_4 s4
ON respuestas.section4_id = s4.id
INNER JOIN section_5 s5
ON respuestas.section5_id = s5.id
INNER JOIN section_6 s6
ON respuestas.section6_id = s6.id
INNER JOIN section_7 s7
ON respuestas.section7_id = s7.id
INNER JOIN section_8 s8
ON respuestas.section8_id = s8.id
INNER JOIN section_9 s9
ON respuestas.section9_id = s9.id
INNER JOIN section_10 s10
ON respuestas.section10_id = s10.id
INNER JOIN section_11 s11
ON respuestas.section11_id = s11.id;