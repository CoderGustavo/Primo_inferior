<?php
function PrimoInferior($num)
{
    $primos = [];
    for ($i=1; $i < $num ; $i++) { 
        $divisores = 0;
        for ($a=2; $a <= $i; $a++) { 
            if($i % $a == 0){
                $divisores+=1;
            }
        }
        if($divisores==1){
            array_push($primos, $i);
        }
    }
    return $primos;
}
$num = $_POST["numero"];
echo "O maior numero inferior é: ".(max(PrimoInferior($num)));
?>
<br>
<a href="index.php">Voltar</a>