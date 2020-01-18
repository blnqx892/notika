<?php

/**
* Updated: Mohammad M. AlBanna
* Website: MBanna.info
*/

session_start();
$bandera = $_POST["bandera"];


if($bandera=="backup"){

	$host="localhost";
	$username="root";
	$password="";
	$database_name="funesi";

	$conn=mysqli_connect($host,$username,$password,$database_name);

	$tables=array();
	$sql="SHOW TABLES";
	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_row($result)){
		$tables[]=$row[0];
	}

	$backupSQL="SET FOREIGN_KEY_CHECKS=0;"."\n\n";
	foreach($tables as $table){
		$query="SHOW CREATE TABLE $table";
		$result=mysqli_query($conn,$query);
		$row=mysqli_fetch_row($result);
		$backupSQL.='DROP TABLE IF EXISTS '.$table.' CASCADE;';
		$backupSQL.="\n\n".$row[1].";\n\n";

		$query="SELECT * FROM $table";
		$result=mysqli_query($conn,$query);

		$columnCount=mysqli_num_fields($result);

		for($i=0;$i<$columnCount;$i++){
			while($row=mysqli_fetch_row($result)){
				$backupSQL.="INSERT INTO $table VALUES(";
					for($j=0;$j<$columnCount;$j++){
						$row[$j]=$row[$j];

						if(isset($row[$j])){
							$backupSQL.='"'.$row[$j].'"';
						}else{
							$backupSQL.='""';
						}
						if($j<($columnCount-1)){
							$backupSQL.=',';
						}
					}
					$backupSQL.=");\n";
}
}
$backupSQL.="\n\n";
}
$backupSQL.="SET FOREIGN_KEY_CHECKS=1;"."\n\n";


if(!empty($backupSQL)){
	$backup_file_name="db/funesi".date("Y-m-d-H-i-s").'.sql';
	$fileHandler=fopen($backup_file_name,'w+');
	$number_of_lines=fwrite($fileHandler,$backupSQL);
	fclose($fileHandler);
}


header("location: /Funesi/notika/green-horizotal/Reespaldo.php?");
}

if ($bandera == "subida") {
	$dir_subida ="../backup/db/";
	$fichero_subido = $dir_subida . basename($_FILES['archivo']['name']);

	if (move_uploaded_file($_FILES['archivo']['tmp_name'], $fichero_subido)) {
		echo "<script language='javascript'>
	$(document).ready(function () {
		setTimeout(function () {
			Swal.fire({
				title: '',
				text: '¡¡¡Subido Exitoso!!!',
				icon: 'success',
				confirmButtonText: 'Aceptar'
			  }).then((result) => {
				if (result.value) {
					window.location='/Funesi/notika/green-horizotal/Reespaldo?.php';
				}
			  })
		}, 1000);
	});
	
	</script>";
	} else {
		echo "<script language='javascript'>
	$(document).ready(function () {
		setTimeout(function () {
			Swal.fire({
				title: '',
				text: 'Hubo un error',
				icon: 'error',
				confirmButtonText: 'Aceptar'
			  }).then((result) => {
				if (result.value) {
					window.location='/Funesi/notika/green-horizotal/Reespaldo?.php';
				}
			  })
		}, 1000);
	});
	
	</script>";
	}

}

if ($bandera == "respaldar") {
	$nombre = $_POST["nombre"];

			//get post data
		$dbHost = 'localhost';
		$dbUsername = 'root';
		$dbPassword = '';
		$dbName = 'funesi';
 
		$filePath = '../backup/db/' . $nombre;
       

		 $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 

    // Temporary variable, used to store current query
    $templine = '';
    
    // Read in entire file
    $lines = file($filePath);
    
    $error = '';
    
    // Loop through each line
    foreach ($lines as $line){
        // Skip it if it's a comment
        if(substr($line, 0, 2) == '--' || $line == ''){
            continue;
        }
        
        // Add this line to the current segment
        $templine .= $line;
        
        // If it has a semicolon at the end, it's the end of the query
        if (substr(trim($line), -1, 1) == ';'){
            // Perform the query
            if(!$db->query($templine)){
                $error .= $db->errors;
            }
            
            // Reset temp variable to empty
            $templine = '';
        }
    }
    $resultado=!empty($error)?false:true;
    if($resultado){
        alert("Restauración Exitosa!!!");

    }else{
        alert("No se completo la operación");
    }
}

if ($bandera == "eliminar") {
	$nombre = $_POST["nombre"];

	$filePath = '../backup/db/' . $nombre;
	$resultado = unlink($filePath);

	if($resultado){
        alert("Respaldo Eliminado");

    }else{
        alert("No se completo la operación");

    }

}

?>