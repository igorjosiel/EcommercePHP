<?php

	$acao = 'recuperar';

	require_once "fpdf182/fpdf.php";
	require 'venda_controller.php';

	$conexao = new Conexao();
	$venda = new Venda();

	$objVendaService = new VendaService($conexao, $venda);

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->setFont('Arial', 'B', 16);
	$pdf->Cell(180, 10, utf8_decode('Relatório de Vendas'), 0, 0, "C");
	$pdf->Ln(15);

	$pdf->setFont("Arial", "I", 10);
	$pdf->Cell(60, 7, "Cliente", 1, 0, "C");
	$pdf->Cell(60, 7, "Produto", 1, 0, "C");
	$pdf->Cell(60, 7, ("Quantidade do Produto"), 1, 0, "C");
	$pdf->Ln();

	foreach ($objVendaService->recuperarArray() as $venda)
	{
		$pdf->Cell(60, 7, utf8_decode($venda['cliente']), 1, 0, "C");
		$pdf->Cell(60, 7, utf8_decode($venda["produto"]), 1, 0, "C");
		$pdf->Cell(60, 7, utf8_decode($venda["qtdProduto"]), 1, 0, "C");
		$pdf->Ln();
	}

	$arquivo = "relatorio_venda.pdf";

	$tipo_pdf = "I";

	$pdf->Output($arquivo, $tipo_pdf);
?>