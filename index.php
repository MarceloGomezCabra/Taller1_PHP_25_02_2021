<?php
/* 1) Programa que lea un valor de precio base y calcule su impuesto, si el valor es mayor de 150.000 
se le aplicará un 19% de impuestos, en caso contrario se le aplicará un 16%.*/

$producto1 = (int) 1000000000;

if ($producto1 > 150000){
    $impuesto1=(float)(19*$producto1)/100;
    print_r("El impuesto aplicado al producto es: ".$impuesto1);

} else if ($producto1 < 150000){
    $impuesto1=(float)(16*$producto1)/100;
    print_r("El impuesto aplicado al producto es: ".$impuesto1);

} else { 
  print_r(<<<TXT
    Ingrese un precio válido.
TXT);

}


/* 2) Calcular el sueldo que le corresponde al trabajador de una empresa que cobra $14.400.000 anual, 
el programa debe realizar los cálculos en función de los siguientes criterios:

•	Si lleva más de 10 años en la empresa se le aplica un aumento del 10%.
•	Si lleva menos de 10 años, pero más que 5 se le aplica un aumento del 7%.
•	Si lleva menos de 5 años, pero más que 3 se le aplica un aumento del 5%.
•	Si lleva menos de 3 años se le aplica un aumento del 3%. */

$años=(int)7;

function porcentaje($porcentaje){
    define("sueldo", (int)14400000);
    $aumento=(int)(($porcentaje*sueldo)/100)+sueldo;
    return $aumento;
}

if ($años>10){
    $resultado= porcentaje(10);
    print_r("Su nuevo salario anual es: ".$resultado." (aumentó un 10%)");
     
} else if ($años<=0){
    print_r(<<<TXT
    ERR0R.
TXT);

} else if ($años<10 && $años>5){
    $resultado= porcentaje(7);
    print_r("Su nuevo salario anual es: ".$resultado." (aumentó un 7%)");

} else if ($años<5 && $años>3){
    $resultado= porcentaje(5);
    print_r("Su nuevo salario anual es: ".$resultado." (aumentó un 5%)");

} else if ($años<3){
    $resultado= porcentaje(3);
    print_r("Su nuevo salario anual es: ".$resultado." (aumentó un 3%)");

} else {
    print_r(<<<TXT
    ERR0R.
TXT);

}

// 3) Programa para solicitar el nombre, y la nota promedio de 5 estudiantes de un curso de computación.

$estudiantes=(array)[
    (string)"Erick"=> (int)9 ,
    (string)"Tom" => (int)5 ,
    (string)"Fabian" => (int)7 ,
    (string)"Andrew" => (int)6 ,
    (string)"Piter" => (int)10
];

$notas=array_values($estudiantes);
$promedio = (int)(array_sum($notas))/5;

print_r($promedio);

/* 4) El programa muestra primero una tabla de notas con sus equivalentes en el Standard Grading System
 o el sistema utilizado en los Estados Unidos que va desde la A hasta la F. El programa preguntará al usuario su nota 
 y transformará ese resultado al equivalente en el Standard Grading System. También el programa dará una pequeña 
 pero valiosa recomendación al usuario respecto a su nivel de estudio y calidad como estudiante. */
?>