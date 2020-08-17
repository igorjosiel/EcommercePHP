<?php

	$acao = 'recuperar';

	require_once "fpdf182/fpdf.php";
	require 'cliente_controller.php';

	$conexao = new Conexao();
	$cliente = new Cliente();

	$objClienteService = new ClienteService($conexao, $cliente);

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->setFont('Arial', 'B', 16);
	$pdf->Cell(190, 10, utf8_decode('Relatório de Clientes'), 0, 0, "C");
	$pdf->Ln(15);

	$pdf->setFont("Arial", "I", 10);
	$pdf->Cell(60, 7, "Nome", 1, 0, "C");
	$pdf->Cell(60, 7, "Sobrenome", 1, 0, "C");
	$pdf->Cell(70, 7, "Email", 1, 0, "C");
	$pdf->Ln();

	foreach ($objClienteService->recuperarArray() as $cliente)
	{
		$pdf->Cell(60, 7, utf8_decode($cliente['first_name']), 1, 0, "C");
		$pdf->Cell(60, 7, utf8_decode($cliente["last_name"]), 1, 0, "C");
		$pdf->Cell(70, 7, utf8_decode($cliente["email"]), 1, 0, "C");
		$pdf->Ln();
	}

	$arquivo = "relatorio_cliente.pdf";

	$tipo_pdf = "I";

	$pdf->Output($arquivo, $tipo_pdf);
?>