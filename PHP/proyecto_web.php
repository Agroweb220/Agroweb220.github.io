<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_nome="formulario";
$db_table_name="registro";

$db_connection=mysql_connect($db_host,$db_user,$db_password);
if(!$db_connections){
die('no se ha podido conectar a la bd');
}
$subs_nome=utf8_decome($_post['Nombres']);
$subs_last=utf8_decome($_post['Apellidos']);
$subs_Gmail=utf8_decome($_post['Gmail']);
$subs_Contraseña=utf8_decome($_post['Contraseña']);
$subs_Confirmar_contraseña=utf8_decome($_post['Confirmar_contraseña']);

$resultado=mysql_query("select * from".$db_table_nome"where
email='".$sybs_email"'",$db_connection);
if(mysql-num_rows($resultado)>0)
{
header('locatiobn:fart,html');
} else{
$insert_value='INSERT INTO`'.$db_name.'`'.`'.$db_table_name.'`(`Nombres`,
               `Apellidos`,`Gmail`,`Contraseña`,`Confirmar_contraseña`)VALVES("'.$subs_name.'","'.$subs_last.'",
   "'.$subs_Gmail.'","'.$subs_Contraseña.'","'.$subs_Confirmar_contraseña.'")';
   mysql_select_db($db_name,$db_connection);
   $retry_value=mysql_query($insert_value,$db_connection);
   if($retry_value)
   {
   die('Error:'mysql_error());
}
header('location:success.html');
}
mysql_close($db_connection);
?>