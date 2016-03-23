<?php

	include "conecta_mysql.inc";
		$resultado = mysql_query ("DELETE FROM produtos");
		$linhas = mysql_affected_rows ();
	mysql_close($conexao);

   echo "<p align=\"center\">Foram excluídos $linhas produtos!</p>";

?>
