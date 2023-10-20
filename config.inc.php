<?php
//.inc é informando que é um arquivo não executável, sendo só um arquivo de configuração.

//Conexão com servidor MySQL
$conn = mysqli_connect("localhost","root","");
//Conexão com o banco MySQL chamado projeto que é nome do banco
$db = mysqli_select_db($conn,"cafebd");
//If de validação de conexão.
/*
if($conn){
    echo "Conexão estabelecida com sucesso";
}else{
    echo("Houve algum erro na conexão");
}
*/

?>