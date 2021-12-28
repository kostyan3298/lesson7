<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица</title>
</head>
<body>

    <?php
function set_table($row,$col,$w_col,$h_row){
    $table_str="
    <style>
table{
    border-collapse: collapse;
}

    td{

        width: {$w_col}px;
        height: {$h_row}px;
        border: 1px solid black;
    }
    </style>
    <table>
    <tbode>";
for ($i=1; $i <=$row ; $i++) { 
    $table_str.="<tr>";
    for ($j=1; $j <=$col; $j++) { 
        $table_str.= "<td></td>";
    }
    $table_str.= "</tr>";
}
    $table_str.="</tbode>
    </table>";
return $table_str;
}
echo set_table(7,8,80,50);
    ?>
</body>
</html>