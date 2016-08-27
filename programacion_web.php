
<?php
// Determinar si un número es negativo.
$numero=9;
if($numero<0){ 
  echo "numero negativo<br>"; 
} elseif($numero > 0){ 
  echo $numero." numero positivo<br>"; 
} else { 
  echo $numero." numero: 0"; 
}

?>

<?php
//Imprimir verdadero o falso de acuerdo al contenido de una variable

$variable=true;
if($variable){
	echo"el contenido es verdadero<br>";
}
	else{
		echo"el contenido es falso<br>";
  }
  

?>

<?php
 //Determinar si un número es primo
 
 $n = 5;
 $primo=0;
 
    for($b = 1;$b < $n; $b++){
        if($n % $b == 0){
           $primo++;
        }
    }
    if($primo >= 2 ){
        echo $n." no es primo<br>";
    } else {
        echo $n." es primo<br>";
    }
?>

<?php
 //Determinar si un número es mayor que 35
 $a=37;
 $b=35;
if($a<'b'){
	echo $a." numero menor a 35<br>";
}
	elseif($a>'b'){
		echo $a." numero mayor a 35<br>";
	}
?>

<?php
//Determinar si un número es positivo y menor que 100

$a = 0;

  if($a < 100 && $a >= 0  ) {
    echo $a." es positivo y menor que 100<br>";
  }else {
    echo  $a." es negativo y menor que 100<br>";
  }

  //Determinar si un número pertenece al intervalo [-3,27].
  
  $n = 12;

  if($n >= -3 && $n <= 27) {
    echo $n." pertenece al intervalo [-3, 27]<br>";
  }else{
    echo $n." no pertenece al intervalo [-3, 27] <br>";

  };

//Determinar si un número no pertenece al intervalo [25,50]

$num = 80;

  if($num <= 50 && $num >= 25  ) {
    echo $num." pertenece al intervalo [25,50]<br>";
  }else {
    echo $num." no pertenece al intervalo [25,50]<br>";
  }

//Determinar si el módulo de un número es menor que 15

$n= 12;

  if(15>$n % 1 ) {
    echo " el modulo ".$n." es menor que 15<br>";
  }else {
    echo " el modulo ".$n." es mayor que 15<br>";
  }

//Determinar si un entero es impar (lo será cuando el resto de su división (operador aritmético ‘%’) por 2 sea distinto de cero)

$n=50 ;

  if($n % 2 != 0) {
    echo  $n."  es un numero impar<br>";
  }else {
    echo  $n." no es un numero impar<br>";
  }

//Eleve al cuadrado un número si es par y al cubo si es impar

$n= 0;
  $res;

  if($n % 2 != 0) {
    $res = $n ** 2;
     echo $n." elevado al cuadrado es ".$res."<br>";
   }else {
  
    $res= $n** 3;
    echo $n." elevado al cubo es ".$res."<br>";
    }

 //Calcule el máximo de 2 números dados
 
 $n1 = 6;
  $n2 = 10;

  if($n2 < $n1) {
    echo " el maximo entre los numeros  es ".$n1."<br>";
  }else {
    echo " el maximo entre los numeros es ".$n2."<br>";
  }

  //Calcule el máximo de tres números
  $n1 = 9;
  $n2 = 25;
  $n3 = 23;

  if($n1 < $n2 && $n2 > $n3) {
    echo " el maximo entre ".$n1.", ".$n2." y ".$n3." es ".$n2."<br>";
  }else if($n1 > $n2 && $n1 > $n3) {
    echo " el maximo entre ".$n1.", ".$n2." y ".$n3." es ".$n1."<br>";
  }else if($n1 < $n2 && $n2 < $n3) {
    echo " el maximo entre ".$n1.", ".$n2." y ".$n3." es ".$n3."<br>";
  }

   //Ordenar 2 números de menor a mayor
   
   $n1 = 8;
  $n2 = 10;

  if($n1< $n2) {
    echo " orden de menor a mayor ".$n1.", ".$n2."<br>";
  }else {
    echo " orden de menor a mayor ".$n1.", ".$n2."<br>";
  }

  //Ordenar 3 numeros de mayor a menor
  
  $n1= 1;
  $n2 =2;
  $n3 =3;

  if($n1 > $n2&& $n2 > $n3) {
    
echo " orden de mayor a menor ".$n1.", ".$n2.", ".$n3.".<br>";
  }else if($n1 < $n2 && $n2 < $n3) {
    echo " orden de mayor a menor ".$n3.", ".$n.", ".$n1.".<br>";
  }else if($n1 < $n2 && $n3 < $n1) {
    echo " orden de mayor a menor ".$n2.", ".$n1.", ".$n3.".<br>";
  }else if($n1 < $n2 && $n3 > $n1) {
    echo " orden de mayor a menor ".$n2.", ".$n3.", ".$n1.".<br>";
  }else if($n1 > $n3 && $n3 > $n2) {
    echo " orden de mayor a menor ".$n1.", ".$n3.", ".$n2.".<br>";
  }else if($n1 < $n3 && $n1> $n2) {
    echo " orden de mayor a menor ".$n3.", ".$n1.", ".$n2.".<br>";
  }


//Determinar la longitud de una cadena y si es mayor a 5 caracteres indicar nombre largo, de lo contrario nombre corto
//
  $cadena = "hola";
  
  if(strlen($cadena) > 5) {
    echo " la longitud de la cadena es de ".strlen($cadena)." caracteres y el texto es largo<br>";
  }else {
    echo " la longitud de la cadena es de ".strlen($cadena)." caracteres y el texto es corto<br>";
  }

   //Determinar si una variable existe
  
  if(isset($miVar)) {
    echo " la variable existe<br>";
  }else {
    echo " la variable no existe<br>";
  }

  
  //Determinar si una variable está vacía o tiene contenido
  
  $variable;

  if(empty($var)) {
    echo " la variable esta vacia<br>";
  }else {
    echo " la variable tiene datos<br>";
  }
?>



