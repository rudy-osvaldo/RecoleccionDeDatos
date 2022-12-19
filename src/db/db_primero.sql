SELECT ubicacion.departamento, section_6.sexo_nacer FROM respuestas
INNER JOIN ubicacion ON respuestas.ubicacion_id = ubicacion.id
INNER JOIN section_6 ON respuestas.section6_id = section_6.id