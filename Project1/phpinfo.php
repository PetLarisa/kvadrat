
<?php
    require "php/header.php";
?>

<style>
        .kvadrat{
            background-color: aqua;
            width: 500px;
            height: auto;
            margin: 100;
            border: 1px solid green;
        
        }</style>
      
   
     
        <input type="number" name="number1" value ="<?php echo $_POST['number1']?>">
        <input type="number" name="answer" value = "<?php echo $_POST['answer']?>">   
  
        <div class = "kvadrat"> <?php
if (!empty($_POST["number1"]) && !empty($_POST["answer"])) { 
    echo 'Рассчет квадрата чисел от ' . $_POST["number1"] . 'до' . $_POST["answer"];
}
?></div>      

 

<div class = "kvadrat"> 
<?php

//$n = $_GET["number"];
if(!empty($_POST["number1"]) && !empty($_POST["answer"])){   
    for($i = $_POST['number1']; $i < $_POST['answer']+1; $i++){
        echo  "<p>Квадрат числа $i равен " . $i**2 . "</p>";
       
    }
   
}
?>
 </div>