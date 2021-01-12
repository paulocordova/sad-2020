<?php
   require_once('dim/DimCliente.php');
   require_once('dim/DimData.php');
   require_once('dim/DimProduto.php');
   require_once('fato/CarregaFatosVenda.php');
   require_once('dim/Sumario.php');

   use dimensoes\Sumario;
   use dimensoes\DimData;
   use dimensoes\DimProduto;
   use dimensoes\DimCliente;
   use fato\CarregaFatosVenda;

   $dimCliente = new DimCliente();
   $sumCliente = $dimCliente->carregarDimCliente();
   echo "Clientes: <br>";
   echo "Inclusões: ".$sumCliente->quantidadeInclusoes."<br>";
   echo "Alterações: ".$sumCliente->quantidadeAlteracoes."<br>";
   echo "<br>==============================================<br>";

   $dimData = new DimData();
   $sumData = $dimData->extrairTransformarDatas();
   echo "Datas: <br>";
   echo "Inclusões: ".$sumData->quantidadeInclusoes."<br>";
   echo "Alterações: ".$sumData->quantidadeAlteracoes."<br>";
   echo "<br>==============================================<br>";

   $dimProduto = new DimProduto();
   $sumProduto = $dimProduto->carregarDimProduto();
   echo "Produtos: <br>";
   echo "Inclusões: ".$sumProduto->quantidadeInclusoes."<br>";
   echo "Alterações: ".$sumProduto->quantidadeAlteracoes."<br>";
   echo "<br>==============================================<br>";

   $fatosVenda = new CarregaFatosVenda();
   $sumFatos = $fatosVenda->carregarFatos('2017-01-01');
   echo "Fatos: <br>";
   echo "Inclusões: ".$sumFatos->quantidadeInclusoes."<br>";
   echo "<br>==============================================<br>";

?>