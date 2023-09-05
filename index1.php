<?php
/*
MATRIZES ASSOCIATIVAS EM PHP
Matrizes associativas são usadas para armazenar pares de valores-chave. Por exemplo, 
para armazenar as marcas de diferentes disciplinas de um aluno em uma matriz, 
uma matriz indexada numericamente não seria a melhor escolha. Em vez disso, 
poderíamos usar os nomes dos respectivos sujeitos como as chaves em 
nosso array associativo, e o valor seriam suas respectivas marcas obtidas.

Exemplo:
Aqui, a função array() é usada para criar um array associativo.
*/
/* First method to create an associate array. */
$student_one = array("Maths"=>95 ,"<br>". "Physics"=>90,  
                  "Chemistry"=>96, "English"=>93,  
                  "Computer"=>98); 
print_r($student_one) ; 
                  
/* Second method to create an associate array. */
$student_two["Maths"] = 95; 
$student_two["Physics"] = 90; 
$student_two["Chemistry"] = 96; 
$student_two["English"] = 93; 
$student_two["Computer"] = 98; 
    
/* Accessing the elements directly */
echo "Marks for student one is:\n"; 
echo "Maths:" . $student_two["Maths"], "\n"; 
echo "Physics:" . $student_two["Physics"], "\n"; 
echo "Chemistry:" . $student_two["Chemistry"], "\n"; 
echo "English:" . $student_one["English"], "\n"; 
echo "Computer:" . $student_one["Computer"], "\n"; 

/* Imprimiu =
As notas do aluno um são: 
Matemática: 95 
Física: 90 
Química: 96 
Inglês: 93 
Informática: 98
*/
//==================================================
echo"<br>";
   
/* Creating an associative array */
$student_one = array("Maths"=>95, "Physics"=>90,  
                  "Chemistry"=>96, "English"=>93,  
                  "Computer"=>98); 
    
    
/* Looping through an array using foreach */
echo "Looping using foreach: \n"; 
foreach ($student_one as $subject => $marks){ 
    echo "Student one got ".$marks." in ".$subject."\n"; 
} 
   
/* Looping through an array using for */
echo "\nLooping using for: \n"; 
$subject = array_keys($student_one); 
$marks = count($student_one);  
    
for($i=0; $i < $marks; ++$i) { 
    echo $subject[$i] . ' ' . $student_one[$subject[$i]] . "\n"; 
} 
?> 