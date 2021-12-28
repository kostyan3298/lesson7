<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подсчет символов</title>
</head>
<body>
<style>
    textarea{
        width: 354px;
        height: 180px;
    }
</style>


    <form action='index6.php' method='POST'>
<textarea name='text' columns='10' rows=''></textarea>
<input type='submit' name='btn '>

<?php
function count_symbol($str,$letter){
    $lenght_str= strlen($str);
    $sum=0;
    if ($lenght_str>0){
    
        for ($i=0; $i<$lenght_str ; $i++) { 
       if ($str[$i]==$letter) $sum++;
        }
    }
    return $sum;
}
$char='L';
if (isset($_POST['btn'])) {
    echo "В этом тексте символов $char встречается ". count_symbol($_POST['text'], $char);
}
?>



    </form>


</body>
</html>