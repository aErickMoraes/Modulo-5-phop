<?php
$conexao = mysqli_connect('127.0.0.1','root','','meubanco');

if($conexao->connect_errno){
    die('Houve uma falha ao conectar');
}else{
    echo 'Conectado com sucesso';
}
$id = 2;
$sql = "select * from clientes where id =?";
$prepareStateman = $conexao->prepare($sql);
$prepareStateman->bind_param('i',$id);
$prepareStateman-> execute();
$resultado  = $prepareStateman-> get_result(); 

echo"<ul>";

while($cliente = $resultado->fetch_assoc()){
    echo "<li>" . $cliente['documento'] . "</li>";

}

echo"</ul>";

$sql = "update clientes set nome = 'Maria Marta' where nome = 'Maria' ";
$conexao->query($sql);


$sql = "delete from clientes  where id = 4";

$sql = "insert into clientes (nome,documento) values ('Jeff','08909802923')";
$sql = "insert into telefones(idCliente,numero)values (5,'(42)92352234')";
$sql = "insert into clientes ";
$resultado = $conexao->query($sql);
var_dump($resultado);




