<!DOCTYPE html>
<html>
<head>
	<title> Aseguradora SSA - Carga Fotografías </title>
	<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
	<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<center><h2>Cargar fotografías</h2>

			<form action="upload.php" method="post" enctype="multipart/form-data" class="dropzone" id="image-upload">
				<div>
	<label>Id del Incidente: </label><input type="text" name="idIncidente" placeholder=<?php echo $_GET['id'];?> value=<?php echo $_GET['id'];?> disabled>
					<h4>Elige las imágenes a cargar</h>
				</div>
			</form>
			</center>

		</div>
	</div>
</div>

<script type="text/javascript">
	Dropzone.options.imageUpload = {
        maxFilesize:1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
</script>

</body>
</html>
