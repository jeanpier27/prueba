<?php 
$conexion=(mysql_connect('localhost','root','1234567890'));
// esto es una prueba para ver control de versionamiento
mysql_select_db('biometrico',$conexion);

if(!$conexion){
	echo'error al conectar';
}

 ?>
 <script language="javascript" src="jquery-3.1.1.min.js"></script>
<select name="departamentos" id="departamentos"> 
 <?php 

$depa=mysql_query("SELECT departamento FROM tb_biometrico group by departamento");
while($depar=mysql_fetch_array($depa)){
 ?>
<option value="<?php echo $depar['departamento']; ?>"><?php echo $depar['departamento']; ?></option>
 <?php 
}
?>
<br><br>
</select>
<select name="empleados" id="empleados"> 

</select>

<script language="javascript">
	$(document).ready(function(){
		$('#departamentos').change(function(){
			var id;
			id=$(this).val();
				$.post("consulta.php",{id:id},function(data){
					$("#empleados").html(data);
				});
		});
	});

</script>