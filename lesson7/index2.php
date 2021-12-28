<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$number=2165793182;
$symbol=5;

function delete_symbol($str,$sym){
    $new_str='';
    $lenght_str=strlen($str);
    for ($i = 0; $i< $lenght_str; $i++ ){
        if ($str[$i] !==$sym ) $new_str.=$str[$i];
    }
    return $new_str;
}
echo "$number без цифры $symbol: ",delete_symbol((string)$number,(string)$symbol);

    ?>
</body>
</html>