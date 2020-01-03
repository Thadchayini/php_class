<html>
<head>
</head>
<body>
<table>
<?php 
$students = array(array("A",10,20,30), array("B",40,50,60), array("C",70,80,90), array("D",10,40,30), array("E",60,30,90));

    for($i = 0; $i < count($students); $i++){
        $total = 0;
        $average = 0;
       
        for ($j = 1; $j < 4 ; $j++){
             $students[$i][$j];
            $total += $students[$i][$j];
            $average = $total/3;
            
        }
        
    
        if ($average >= 80){
            "A";
        }elseif($average >= 60){
            "B";
        }elseif($average >= 40){
            "C";
        }else{
            "F";
        }
        
    }
?>

<tr>
<td> <?php echo $students[$i][0]; ?> </td>
<tr>
</table>
</body>
</html>