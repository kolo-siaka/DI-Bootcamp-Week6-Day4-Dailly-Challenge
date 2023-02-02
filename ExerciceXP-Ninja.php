<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Daily Challenge</title>
</head>
<body>

	 <div class="container-fluid">
	 	<div class="row">
	 		<div class="col-4">
	 		</div>
	 		<div class="col-4">
	 			<form action="Ninja.php" method="POST">
	 			<label for="nom" class="form-label">Nom :</label>
                <input type="txt" class="form-control" name="nom" aria-describedby="Nom"><br>
                <select class="form-select w-50" aria-label="Default select example" name="opt">
                <option selected>Menu</option>
                <option value="Bleu">Bleu</option>
                <option value="Blanc">Blanc</option>
                <option value="Noir">Noir</option>
                </select>
                 <input type="submit" class="btn btn-primary" id="submit" value="Envoyer">
                 </form>
	 		</div>
	 		<div class="col-4">
	 		</div>
	 	</div>
	 </div>

</body>
</html>