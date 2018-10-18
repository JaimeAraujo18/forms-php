<html>
	<head>
		<title>Cadastro Completo</title>
		<meta charset="UTF-8" />
		<meta name="author" content="Jaime" />
		<meta name="description" content="Cadastro de funcionário" />
		<meta name="keywords" content="cadastro" />
		<link rel="stylesheet" href="./css/styles.css" >
	</head>
	<body>
		<? php 
			/* Criar 1 uma aplicação web que receba os seguintes dados de funcionários de uma empresa: nome, cpf, rg, pis e valor do salário bruto.
			Após a entrada de dados de cada pessoa, a aplicação deve exibir os dados informados, assim como, os valores do desconto de imposto de renda,
			desconto de INSS e o valor líquido do salário. 
			As tabelas de taxas de desconto de INSS e IRPF devem ser obtidas junto ao site destas entidades ou outra fonte confiável.
			É imprescindível que os dados informados sejam validados antes de serem enviados para processamento.
			Esta aplicação deve ter uma boa apresentação, portanto é necessário aplicar estilização (CSS).
			Será avaliado o funcionamento e apresentação da aplicação.
			Entregar o código no formato zip e disponibilizar o link com com a aplicação para teste.*/
		?>

		<?php
			$s=floatval($_POST['sb']);
			echo"Nome: ".$_POST['nome']."<br/>";
			echo"CPF: ".$_POST['cpf']."<br/>";
			echo"RG: ".$_POST['rg']."<br/>";
			echo"PIS: ".$_POST['pis']."<br/>";
			echo"Salário Bruto: R$ ".$s."<br/>";

			if($s<1693.73){
				$sl1= $s-($s*0.92);
				$desconto1= $s*0.08;
				echo"Valor descontado: (INSS) R$ ".$desconto1."<br/>";

			}
			else if ($s>1693.72 && $s<2822.90) {
				$sl1= $s-($s*0.91);
				$desconto1= $s*0.09;
				echo"Valor descontado: (INSS) R$ ".$desconto1."<br/>";
			}
			else if ($s>2822.90) {
				$sl1= $s-($s*0.89);
				$desconto1= $s*0.11;
				echo"Valor descontado: (INSS) R$ ".$desconto1."<br/>";
			}

			if ($s<1903.98) {
				echo"Valor descontado: Isento. <br/>";
			}
			else if ($s>1903.98  && $s<2826.65) {
				$sl2=$s-($s*0.925);
				$desconto2= $s*0.075;
				echo"Valor descontado: (Imposto de renda) R$ ".$desconto2."<br/>";
			}
			else if ($s>2826.65  && $s<3751.05) {
				$sl2=$s-($s*0.85);
				$desconto2= $s*0.15;
				echo"Valor descontado: (Imposto de renda) R$ ".$desconto2."<br/>";
			}
			else if ($s>3751.65 && $s< 4664.68) {
				$sl2=$s-($s*0.775);
				$desconto2= $s*0.225;
				echo"Valor descontado: (Imposto de renda) R$ ".$desconto2."<br/>";
			}
			else if ($s>4664.68) {
				$sl2=$s-($s*0.725);
				$desconto2= $s*0.275;
				echo"Valor descontado: (Imposto de renda) R$ ".$desconto2."<br/>";
			}
			$descontoTotal=$desconto1+$desconto2;
			$liquido=$s-$descontoTotal;
			echo"Valor total descontado: R$ ".$descontoTotal."<br/>";
			echo"Salário líquido: R$ ".$liquido;
			?>		

	</body>
</html>