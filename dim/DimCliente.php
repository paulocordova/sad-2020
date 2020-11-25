<?php
namespace dim;

mysqli_report(MYSQLI_REPORT_STRICT);

class DimCliente{
   public function carregarDimCliente(){

      //Verificar se a Dimensão no Data Mart está Vazia

      if(){ //Dimensão está vazia

         //Carregar todos os registros da base transacional no Data Mart

      }else{ //A Dimensão já contem dados

         //Buscar os registros na base de dados transacional
         //Fazer uma busca em cada cliente para saber se já está no Data Mart

         if(){ // Cliente da base transacional não está no Data Mart

            //Insere o cliente da base transacional no Data Mart

         }else{ // Cliente da base transacional já está no Data Mart

            //Testa se houve alteração
            //Função de Hash
            if(){ //Houve alteração do registro na base de dados transacional

               //Primeiro: atualizar a data final do registro atual do Data Mart
               //Segundo: incluir o registro atualizado da base de dados transacional no Data Mart

            }

         }

      }
   }
   private function strIgual($strDM, $strTS){
      $hashDM = md5($strDM);
      $hashTS = md5($strTS);

      if($hashDM === $hashTS){
         return TRUE;
      }else{
         return FALSE;
      }
   }
   private function conectarBanco($banco){
      if(!defined('DS')){
         define('DS', DIRECTORY_SEPARATOR);
      }
      if(!defined('BASE_DIR')){
         define('BASE_DIR', dirname(__FILE__).DS);
      }
      require(BASE_DIR.'config_db.php');
      try{
         $conn = new \MySQLi($dbhost, $user, $password, $banco);
         return $conn;
      }catch(mysqli_sql_exception $e){
         throw new \Exception($e);
         die;
      }
   }
}
?>