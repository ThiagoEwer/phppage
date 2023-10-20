 <?php 
 include_once("../config.inc.php");

$titulo = $_REQUEST["titulo"];
$conteudo = $_REQUEST["conteudo"];



$sql = "INSERT INTO paginas (titulo,texto)
        VALUES ('$titulo','$conteudo')";

$inserir = mysqli_query($conn,$sql);

if($inserir){

    echo "Pagina cadastrada com sucesso.";

}else{
    echo "Houve um erro, veririque o código";
}


?>