<html>
	<head>
		<title>Cadastro</title>
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
		<form action="exibicao.php" method="post">
			Nome: <input pattern="^([A-Z]{1}[a-z]+)+ ?(([A-Za-z]{1,3} ?)+[A-Z]{1}[a-z]+ ?)*$" type='text' name='nome' required placeholder='Nome' title="Nomes devem começar com letra maiuscula"><br/>
			CPF:<input pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" type='text' name='cpf' required placeholder='CPF' title="CPF neste formato: 000.000.000-00"><br/>
			RG:<input pattern="\d{10}"type='text' name='rg' required placeholder='RG' title=" Apenas números"><br/>
			PIS:<input pattern="\d{3}\.\d{5}\.\d{2}-\d{1}" type='text' name='pis' required placeholder='PIS' title="PIS neste formato: 000.00000.00-0"><br/>
			Salário Bruto: R$<input pattern="\d{4,7}" type='text' name='sb' required placeholder='Salário' title="Salário neste formato: 1000"><br/>
			<input type='submit'>
		</form>

	</body>
</html>