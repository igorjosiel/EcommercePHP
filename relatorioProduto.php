<?php

	$acao = 'recuperar';

	require_once "fpdf182/fpdf.php";
	require 'produto_controller.php';

	$conexaoExtra = new ConexaoExtra();
	$produto = new Produto();

	$objProdutoService = new ProdutoService($conexaoExtra, $produto);

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->setFont('Arial', 'B', 16);
	$pdf->Cell(190, 10, utf8_decode('Relatório de Produtos'), 0, 0, "C");
	$pdf->Ln(15);

	$pdf->setFont("Arial", "I", 10);
	$pdf->Cell(38, 7, "Produto", 1, 0, "C");
	$pdf->Cell(38, 7, "Marca", 1, 0, "C");
	$pdf->Cell(38, 7, utf8_decode("Ano de Fabricação"), 1, 0, "C");
	$pdf->Cell(38, 7, ("Quantidade"), 1, 0, "C");
	$pdf->Cell(38, 7, utf8_decode("Preço"), 1, 0, "C");
	$pdf->Ln();

	foreach ($objProdutoService->recuperarArray() as $produto)
	{
		$pdf->Cell(38, 7, utf8_decode($produto['nome']), 1, 0, "C");
		$pdf->Cell(38, 7, utf8_decode($produto["marca"]), 1, 0, "C");
		$pdf->Cell(38, 7, utf8_decode($produto["anoFab"]), 1, 0, "C");
		$pdf->Cell(38, 7, utf8_decode($produto["quantidade"]), 1, 0, "C");
		$pdf->Cell(38, 7, utf8_decode($produto["preco"]), 1, 0, "C");
		$pdf->Ln();
	}

	$arquivo = "relatorio_produto.pdf";

	$tipo_pdf = "I";

	$pdf->Output($arquivo, $tipo_pdf);
?>