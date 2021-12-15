<!DOCTYPE html>
<html>
<head>
    <title>Полинка</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите элементы массива через запятую:</p>
        <input type="text" name="n" value="1, 2, 3">
        <input type="submit" value="OK">
    </form>
    <?php
        $n=$_POST["n"];
        $myArray = explode(", ", $n);


    
        //Произведение элементов массива с четными номерами
        $proizv=1;
        for($i=0; $i<count($myArray); $i++){
            if($i%2==0){
                $proizv*=$myArray[$i];
            }
        }


        //Сумма элементов массива, располоенных между первым и последним нулевыми элементами
        $first0El;
        $last0El;
        $sum0=0;
        for($i=0; $i<count($myArray); $i++){
            if($myArray[$i]==0){
                $first0El=$i;
                break;
            }
        }
        for($i=count($myArray)-1; $i>0; $i--){
            if($myArray[$i]==0){
                $last0El=$i;
                break;
            }
        }

        for($i=$first0El+1; $i<$last0El; $i++){
            $sum0+=$myArray[$i];
        }


        //Массив, где сначала расположены положительные элементы, а потом отрицательные
        $ArrOtr = [];
        $ArrPol = [];
        for($i=0; $i<count($myArray); $i++){
            if($myArray[$i]<0){
                $ArrOtr[]=$myArray[$i];
            }
            else{
                $ArrPol[]=$myArray[$i];
            }
        }
        $myArray=array_merge($ArrPol, $ArrOtr);      
        echo "Произведение элементов массива с четными номерами: ".$proizv."; Сумма элементов массива, располоенных между первым и последним нулевыми элементами: ".$sum0."; Массив, где сначала расположены положительны элементы, а потом отрицательные: </br>";
        for($m=0; $m<count($myArray); $m++){
            echo $myArray[$m]."; ";
        }
    ?>
</body>
</html>