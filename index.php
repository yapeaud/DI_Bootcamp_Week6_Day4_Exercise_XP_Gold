<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week6_Day4_Exercise_XP_Gold</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <?php
        $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
        68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
        $temp_array = explode(',', $month_temp);
        $tot_temp = 0;
        $temp_array_length = count($temp_array);
        foreach($temp_array as $temp)
        {
        $tot_temp += $temp;
        }
        $avg_high_temp = $tot_temp/$temp_array_length;
        echo "Average Temperature is : ".$avg_high_temp."
        "; 
        sort($temp_array);
        echo " List of five lowest temperatures :";
        for ($i=0; $i< 5; $i++)
        { 
        echo $temp_array[$i].", ";
        }
        echo "List of five highest temperatures :";
        for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
        {
        echo $temp_array[$i].", ";
        }
    ?>
    <hr>
    <h1>Exercise 2</h1>
    <p>Replace the first ‘the’ of the following string with ‘best’</p>
    <?php
        $str = 'Techstudy - the Debugging Solution website';
        echo $str."<br>" ."<br>";
        echo preg_replace('/the/', 'Best', $str, 1); 
    ?>
    <hr>
    <h1>Exercise 3</h1>
    <?php
        $my_array = array("bmw","jeep","dastun","ferrari","Honda");
        $new_array = array_map('strlen', $my_array);
        
        echo "The shortest array length is ". min($new_array)."<br>". // min() function 
        " The longest array length is " . max($new_array).'.'; //max() function
    ?>
    <hr> 
</body>
</html>