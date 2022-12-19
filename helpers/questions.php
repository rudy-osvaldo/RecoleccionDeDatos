<?php
    function groupValidate($quests){
        if(!isset($_GET['group']) || $_GET['group'] < 1 || $_GET['group'] > count($quests)){
            header('location: '.RAIZ.'/questions.php?group=1&page=1');
        }
    }

    function countInputs($response){
        $res = 0;
        foreach($response as $item){
            $res += count($item['options']);
        }
        return $res;
    }

    function showNote($note){
        if(strlen($note) > 0){
            echo '<p class="note-question">'.$note.'</p>';
        }
    }

    function nextPage($number_pages){
        $current_group = $_GET['group'];
        $next = $_GET['page'];

        if($next+1 <= $number_pages){
            $next++;
        }else{
            $current_group++;
            $next=1;
        }

        return "questions.php?group=$current_group&page=$next";
    }

    function previousPage($number_pages){
        $current_group = $_GET['group'];
        $previous = $_GET['page'];

        if($previous-1 >= 1){
            $previous--;
        }else{
            $current_group--;
            $previous = $number_pages;
        }

        return "questions.php?group=$current_group&page=$previous";
    }

    function unique_multidim_array($array, $key) { 
        $temp_array = array(); 
        $i = 0; 
        $key_array = array(); 
        
        foreach($array as $val) { 
            if (!in_array($val[$key], $key_array)) { 
                $key_array[$i] = $val[$key]; 
                $temp_array[$i] = $val; 
            } 
            $i++; 
        } 
        return $temp_array; 
      }
      
?>