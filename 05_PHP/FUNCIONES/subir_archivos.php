<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP File Upload</title>
</head>
<body>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }
  ?>

  <form method="POST" action="" enctype="multipart/form-data">
    <input type="file" name="uploadedFile" />
    <input type="submit" name="uploadBtn" value="Upload" />
  </form>

</body>
</html>

<?php

$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {

   
    // Obtener detalles archivo subido. Crea variables filename, filesize,..
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    
    // parte cadena por punto, donde obtienes --> nombre archivo + extension
    $fileNameCmps = explode(".", $fileName);  

    // guardas extension archivo en una variable  
    $fileExtension = strtolower(end($fileNameCmps));  

    // imprimes tamaño archivo
    echo $fileSize;

    // sanitize file-name
    // $newFileName = time() . $fileName . '.' . $fileExtension;
    // para evitar que nombre archivo se sube este repetido, creamos un nuevo nombre que tiene formato fecha actual
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
    
    // Definimos las extensiones archivos permitimos
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');


    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // Indicamos el directorio al cual subiremos archivos
      $uploadFileDir = 'c:/xampp/htdocs/ejercicios/';
      // Crea una carpeta con nombre uploadfiledir y extension archivo subido
      $dest_path = $uploadFileDir . $newFileName;


      // Mensaje aportamos usuario en caso subida correcta 
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='Archivo subido correctamente.';
      }
      else 
      {
        $message = 'Hubo un error al mover el archivo al directorio subidas. Verificar directorio subidas tiene permisos de escritura en servidor.';
      }
    }
    else
    {
      $message = 'Subida archivo fallida. Solo permitida extensiones: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'Hubo un error en el archivo subido. Verificar error en siguiente fichero.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}
$_SESSION['message'] = $message;
//header("Location: form_upload.php");