<?php

require_once 'Calculadora.php';

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

$calculadora = new Calculadora();

//setar valores
$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);


//operacoes
	switch ($operacao) {
		case 'somar':
			$calculadora->somar();
			break;

		case 'subtrair':
			$calculadora->subtrair();
			break;

		case 'multiplicar':
			$calculadora->multiplicar();
			break;

		case 'dividir':
			$calculadora->dividir();
			break;
		
	}

echo 'Resultado: '.$calculadora->getTotal();


?>