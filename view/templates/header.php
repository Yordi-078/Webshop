<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Webshop</title>
	<script src="<?= URL ?>/js/script.js"></script>
	<link rel="stylesheet" href="<?= URL ?>/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=URL?>index.php"><img src="<?=URL?>public/images/logo.png" width="56" height="56"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?=URL?>index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                            Producten
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?=URL?>banken.php">Banken</a>
                            <a class="dropdown-item" href="<?=URL?>stoelen.php">Stoelen</a>
                            <a class="dropdown-item" href="<?=URL?>electro.php">Electro</a>
                        </div>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="<?=URL?>info.php">Info</a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="<?=URL?>contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>

