<?php 
$conexion=(mysql_connect('localhost','root','1234567890'));

mysql_select_db('biometrico',$conexion);

if(!$conexion){
	echo'error al conectar';
}

$id=$_POST['id'];

// echo("<option>$id</option>");


$depa=mysql_query("SELECT tb_empleado.nombre FROM tb_biometrico inner join tb_empleado on tb_biometrico.id_empleado = tb_empleado.id_empleado WHERE tb_biometrico.departamento='$id' group by tb_empleado.nombre");
while($depar=mysql_fetch_array($depa)){
 ?>
<option ><?php echo $depar['nombre']; ?></option>
 <?php 
}
?>
