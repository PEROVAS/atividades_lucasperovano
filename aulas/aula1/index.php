<?php

$mensagem = 'olá mundo';

echo $mensagem;

echo '<h2>Olá mundo</h2>';

$primeiro_nome = 'Lucas';
$idade = 17;
$gosta_de_bolo = true;

echo $resultado_ano = 2025 - $idade;

echo '<br>';

$num = 37.5;
echo $num;

$num2 = (int) $num;
echo '<br>';
echo $num2;

$nota = 8;
if($nota >= 7){
echo '<p>Passou de ano</p>';
}else if ($nota > 11){
    echo '<p>Como você fez isso</p>';
}else {
    echo '<p>Não passou na prova</p>';
};


for($i = 0; $i <=5; $i++){

 //echo '<p>Contagem: . $i .</p>';
 echo "<p>Contagem: $i </p>";
};


$frutas = array ('laranja','banana', 'tomate', 'tangerina');
echo $frutas[2];

function saudacao($nome){

  return "olá $nome";
};
echo saudacao ('perovas');







?>