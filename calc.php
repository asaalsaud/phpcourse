<?php
// calcultator
$number1 = $_GET["number1"];
$number2 = $_GET["number2"];
$operator = $_GET["operator"];

function add($X , $y){
    return $X + $y;
}
if(!empty($number1) && !empty($number2) && !empty($operator)){
    if($operator === "+"){
        $result = $_GET[add()];
    }elseif($operator === "-"){
        $result = $_GET["number1"] - $_GET["number2"];
    }elseif($operator === "*"){
        $result = $_GET["number1"] * $_GET["number2"];
    }elseif($operator === "/" ){
        $result = $_GET["number1"] / $_GET["number2"];
    }
}

if(empty($number1)){
    $result = "الرقم الأول فارغ";
}elseif(empty($number2)){
    $result = "الرقم الثاني فارغ";
}elseif(empty($operator)){
    $reult = "يرجى ادخال العمليه";
}else{
    if($operator === "+"){
        $result = $_GET["number1"] + $_GET["number2"];
    }elseif($operator === "-"){
        $result = $_GET["number1"] - $_GET["number2"];
    }elseif($operator === "*"){
        $result = $_GET["number1"] * $_GET["number2"];
    }elseif($operator === "/" ){
        $result = $_GET["number1"] / $_GET["number2"];
    }
}



?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <div class = "container">
        <form action= "calc.php" method="GET" class="form">
            <div>
                <label> Enter Number1:</label>
                <input type="number" id= "num1" name= "number1" class="form-control">
            </div>
            <br>
            <div class="alert alert-success">
                <label> Enter Number2:</label>
                <input type ="number" id="num2" name="number2" class="form-control">
            </div>
            <br>
            <div>
                <label>operation:</label>
                <input type= "text" name="op" class="form-control">
            </div>

            <div>
                <?php echo $result ?>
            </div>
            <br>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
  </body>
</html>
