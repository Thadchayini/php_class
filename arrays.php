<?php

$students = array(array("A",10,20,30), array("B",40,50,60), array("C",70,80,90), array("D",10,40,30), array("E",60,30,90));

echo '<table  border = "1">';

for($i = 0; $i < count($students); $i++){
    $total = 0;
    $average = 0;

    echo '<tr>';
    echo '<td>' . $students[$i][0] . '</td>';
    for ($j = 1; $j < 4 ; $j++){
        echo '<td>' . $students[$i][$j] . '</td>';
        $total += $students[$i][$j];
        $average = $total/3;
        
    }
    echo '<td>' . $total . '</td>';
    echo '<td>' . $average . '</td>';

    if ($average >= 80){
        echo '<td bgcolor = "green">A</td>';
    }elseif($average >= 60){
        echo '<td bgcolor = "green">B</td>';
    }elseif($average >= 40){
        echo '<td bgcolor = "green">C</td>';
    }else{
        echo '<td bgcolor = "red">F</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
