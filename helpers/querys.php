<?php

    function db_questions_get($con){
        $consulta = file_get_contents(DIR."/src/db/questions_db.sql");
        $res = $con->query($consulta);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }


    function save_question($con, $response_arreglo){
        $ids = [];
        $usuario_id = $_SESSION['usuario']['id'];
        array_push($ids, db_ubicacion($con, $response_arreglo));
        for($i = 1; $i <= 11; $i++){
            $funtion = "db_seccion_".$i;
            array_push($ids, $funtion($con, $response_arreglo));
        }

        $con->query("INSERT INTO respuestas VALUES(null, '$usuario_id', '$ids[0]', '$ids[1]', '$ids[2]', '$ids[3]', '$ids[4]', '$ids[5]', '$ids[6]', '$ids[7]', '$ids[8]', '$ids[9]', '$ids[10]', '$ids[11]')");
        return true;
    }

    function db_ubicacion($con, $collection){
        $datos = array_slice($collection, 0, 6);

        $con->query("INSERT INTO ubicacion VALUES(null, 1, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]')");
        return $con->query("SELECT LAST_INSERT_ID()")->fetchColumn();
    }

    function db_seccion_1($con, $collection){
        $datos = array_slice($collection, 6, 7);
        $con->query("INSERT INTO section_1 VALUES(null, 2, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]')");
        return $con->query("SELECT LAST_INSERT_ID()")->fetchColumn();
    }

    function db_seccion_2($con, $collection){
        $datos = array_slice($collection, 13, 6);
        $con->query("INSERT INTO section_2 VALUES(null, 2, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]')");
        return $con->query("SELECT LAST_INSERT_ID()")->fetchColumn();
    }

    function db_seccion_3($con, $collection){
        $datos = array_slice($collection, 19, 5);
        $con->query("INSERT INTO section_3 VALUES(null, 2, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]')");
        return $con->query("SELECT LAST_INSERT_ID()")->fetchColumn();
    }

    function db_seccion_4($con, $collection){
        $datos = array_slice($collection, 24, 7);
        $con->query("INSERT INTO section_4 VALUES(null, 2, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]')");
        return $con->query("SELECT LAST_INSERT_ID()")->fetchColumn();
    }

    function db_seccion_5($con, $collection){
        $datos = array_slice($collection, 31, 5);
        $con->query("INSERT INTO section_5 VALUES(null, 2, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]')");
        return $con->query("SELECT LAST_INSERT_ID()")->fetchColumn();
    }

    function db_seccion_6($con, $collection){
        $datos = array_slice($collection, 36, 7);
        $con->query("INSERT INTO section_6 VALUES(null, 3, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]')");
        return $con->query("SELECT LAST_INSERT_ID()")->fetchColumn();
    }

    function db_seccion_7($con, $collection){
        $datos = array_slice($collection, 43, 6);
        $con->query("INSERT INTO section_7 VALUES(null, 3, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]')");
        return $con->query("SELECT LAST_INSERT_ID()")->fetchColumn();
    }

    function db_seccion_8($con, $collection){
        $datos = array_slice($collection, 49, 5);
        $con->query("INSERT INTO section_8 VALUES(null, 3, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]')");
        return $con->query("SELECT LAST_INSERT_ID()")->fetchColumn();
    }

    function db_seccion_9($con, $collection){
        $datos = array_slice($collection, 54, 7);
        $con->query("INSERT INTO section_9 VALUES(null, 3, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]')");
        return $con->query("SELECT LAST_INSERT_ID()")->fetchColumn();
    }

    function db_seccion_10($con, $collection){
        $datos = array_slice($collection, 61, 6);
        if(count($datos) != 0){
            $con->query("INSERT INTO section_10 VALUES(null, 3, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]')");
        }else{
            $con->query("INSERT INTO section_10 VALUES(null, 3, '', '', '', '', '', '')");
        }
        return $con->query("SELECT LAST_INSERT_ID()")->fetchColumn();
    }

    function db_seccion_11($con, $collection){
        $datos = array_slice($collection, 67, 4);
        if(count($datos) != 0){
            $con->query("INSERT INTO section_11 VALUES(null, 3, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')");
        }else{
            $con->query("INSERT INTO section_11 VALUES(null, 3, '', '', '', '')");
        }
        return $con->query("SELECT LAST_INSERT_ID()")->fetchColumn();
    }

    function tablePorcentaje($con, $entidad, $where, $values){
        $count = (int) $con->query("SELECT COUNT(id) as total FROM $entidad")->fetch(PDO::FETCH_ASSOC)['total'];

        $html = "<table class='pdf-information'>";

            $html .= "<tr>";
                $html .= "<th>Valores</th>";
                $html .= "<th>Numero de respuestar</th>";
                $html .= "<th>Porcentajes</th>";
            $html .= "</tr>";

            foreach($values as $item){
                $single_count = (int) $con->query("SELECT COUNT(id) as total FROM $entidad WHERE $where='$item'")->fetch(PDO::FETCH_ASSOC)['total'];
                $html .= "<tr>";
                    $html .= "<td>".$item."</td>";
                    $html .= "<td>".$single_count."</td>";
                    $html .= "<td>".(round(($single_count*100)/$count, 2))."%</td>";
                $html .= "</tr>";
            }

        $html .= "</table>";
        
        return $html;
    }

?>