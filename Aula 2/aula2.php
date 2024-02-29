<?php

$codFuncionario = $_POST['codFuncionario'];
$horasMes = $_POST['horasMes'];
$horasExtras = $_POST['horasExtras'];
$valorHora = $_POST['valorHora'];
$numDependentes = $_POST['numDependentes'];

echo "<br>Código do funcionario: ".$codFuncionario;
echo "<br>Horas trabalhadas/mês: ".$horasMes;
echo "<br>Horas extras: ".$horasExtras;
echo "<br>Valor hora: ".$valorHora;
echo "<br>Número de dependentes: ".$numDependentes;

$salarioBruto = $horasMes*$valorHora;

$valorExtra = $valorHora*1.5;
$extra = $horasExtras*$valorExtra;

$contaDep = $numDependentes*0.03;
$valorDep = $contaDep*$salarioBruto;

$porcDescTransporte = $salarioBruto*0.06;

$salario = $salarioBruto-$porcDescTransporte;
$salarioLiquido = $salario+$extra+$valorDep;

echo "<br> Código do funcionário: ".$codFuncionario;
echo "<br> Salário bruto: ".$salarioBruto;
echo "<br> Valor por hora extra: ".$valorExtra;
echo "<br> Acréscimo por dependentes: ".$valorDep;
echo "<br> Desconto Vale-Transporte: ".$porcDescTransporte;
echo "<br> Salário Liquido: ".$salarioLiquido;


?> 
