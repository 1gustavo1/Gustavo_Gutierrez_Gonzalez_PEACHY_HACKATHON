<?
/*
1.Escribe un programa que cuente hasta 100 e imprima Fizz 
si el contador es par, Buzz si el contadores impar y FizzBuzz 
si es impar y divisible entre 7.*/



for ($i=1;$i<=100;$i++)
{

switch($i)
{
case (($i%2)==0):echo "<br>".$i." Fizz "."<br>";break;
case (($i%7)==0):echo "<br>".$i." FizzBuzz"."<br>";break;
default: echo "<br>".$i." Buzz "."<br>";
    
  }

}

?>
