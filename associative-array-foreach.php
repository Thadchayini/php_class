<?php
$students = array("stu1"=>array("fname"=>"Abcde","Maths"=>20,"Science"=>30,"Tamil"=>40),"stu2"=>array("fname"=>"Fghij","Maths"=>56,"Science"=>24,"Tamil"=>70),"stu3"=>array("fname"=>"Klmno","Maths"=>70,"Science"=>80,"Tamil"=>44),"stu4"=>array("fname"=>"Pqrst","Maths"=>36,"Science"=>79,"Tamil"=>57),"stu5"=>array("fname"=>"Uvwxyz","Maths"=>68,"Science"=>24,"Tamil"=>56));

echo '<table border = "1">';

    foreach($students as $a=>$b){
        $total = 0;
        $i = 0;
        $average = 0;
        echo '<tr><td bgcolor = "grey" colspan = "2">Student Details</td></tr>';

        echo '<tr>';
        echo '<td>' . $a . '</td>';
        echo '<td> Marks </td>';
        echo '</tr>';

        
    foreach($b as $c=>$d){
        
    
        echo '<tr>';
        echo '<td>' . $c . '</td>';
        echo '<td>' . $d . '</td>';
        echo '</tr>';
        
        // if($i != 0){
        //     $total += $d;
            
        // }
        // $i++;

        

        //OR

        if(is_numeric($d)){
            $total += $d;
        }
        $average = $total/3;
    }
    
        echo '<tr>';
        echo '<td> Total </td>';
        echo '<td>' . $total . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td> Average </td>';
        echo '<td>' . $average . '</td>';
        echo '</tr>';

        if($average >= 80){
            echo '<tr>';
            echo '<td> Result </td>';
            echo '<td bgcolor = "green"> A </td>';
            echo '</tr>';
        }elseif($average >= 60){
            echo '<tr>';
            echo '<td> Result </td>';
            echo '<td bgcolor = "green"> B </td>';
            echo '</tr>';
        }elseif($average >= 40){
            echo '<tr>';
            echo '<td> Result </td>';
            echo '<td bgcolor = "yellow"> C </td>';
            echo '</tr>';
        }else{
            echo '<tr>';
            echo '<td> Result </td>';
            echo '<td bgcolor = "red"> F </td>';
            echo '</tr>';
        }
    }

    echo '</table>';


?>