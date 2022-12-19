<?php

    function json_save($key, $value) {
        $json = file_get_contents(DIR.'/src/json/local.json');
        $data = json_decode($json, true);
        $data[$key] = $value;
        $json = json_encode($data);
        file_put_contents(DIR.'/src/json/local.json', $json);
    }

    function json_get($key) {
        $json = file_get_contents(DIR.'/src/json/local.json');
        $data = json_decode($json, true);
        if (isset($data[$key])) {
          return $data[$key];
        }
        return false;
    }

    function json_read_all() {
        $json = file_get_contents(DIR.'/src/json/local.json');
        $data = json_decode($json, true);
        return $data;
    }

    function json_clear() {
        file_put_contents(DIR.'/src/json/local.json', "{}");
    }


    function getEncuesta($input){
        $raiz = "page-".$_GET['group']."-".$_GET['page'];
        $obj = json_get($raiz);

        if($obj){
            if(isset($obj[$input])){
                return $obj[$input];
            }
            return null;
        }
        return null;
    }

    function inputvalue($input){
        $res = getEncuesta($input);
        return is_null($res) ? '' : 'value="'.$res.'"';
    }

    function inputcheckvalue($input){
        $res = getEncuesta($input);
        $options = ["Argentina", "Colombia", "Uruguay", "Brasil", "Paraguay", "Venezuela", "Chile", "Peru"];
        if(!in_array($res, $options)){
            return is_null($res) ? '' : 'value="'.$res.'"';
        }
    }

    function getinputcheckvalue($input){
        $res = getEncuesta($input);
        $options = ["Argentina", "Colombia", "Uruguay", "Brasil", "Paraguay", "Venezuela", "Chile", "Peru"];
        if(!in_array($res, $options)){
            return is_null($res) ? '' : $res;
        }else{
            return '';
        }
    }


    function textareavalue($input){
        $res = getEncuesta($input);
        return is_null($res) ? '' : $res;
    }

    function checkedvalue($input, $value){
        $res = getEncuesta($input);
        $value = strtolower($value);
        if(!is_null($res)){
            $res = strtolower($res);
            if(!strcmp($res, $value)){
                return "checked";
            }
        }else{
            return '';
        }
    }

    function selectvalue($input, $value){
        $res = getEncuesta($input);
        $value = strtolower($value);
        if(!is_null($res)){
            $res = strtolower($res);
            if(!strcmp($res, $value)){
                return "selected";
            }
        }else{
            return '';
        }
    }

    function checkdefault($input){
        $res = getEncuesta($input);
        if(is_null($res)){
            return 'checked';
        }
    }

?>