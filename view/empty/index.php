<div>
        
        <div class="container-fluid">
            <div class="row jumbotron">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                    <p class="lead">Wij hebben al onze producten voor u klaar staan!</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                    <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">bekijken</button></a>
                </div>
            </div>
        </div>


        <div class="row">
        <?php foreach ($data['webshop'] as $products) { ?>
		<tr>

        <div class="card col-3 m-5" >
        <img src="<?=URL?>public/images/<?= $products["image"] ?>"width="100" height="100">
  <div class="card-body">
    <h5 class="card-title"><?= $products["name"] ?></h5>
    <p class="card-text"><?= $products["description"] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">category: <?= $products["category"]?></li>
    <li class="list-group-item">€<?= $products["price"] ?></li>
  </ul>
  <div class="card-body">
    <a href="<?=URL?>empty/oneProduct/<?=$products['id']?>" class="card-link">Details</a>
    <a href="<?=URL?>empty/#/<?= $products['id'] ?>" class="card-link">Winkelwagen</a>
  </div>
</div>
	<?php } ?>
    </div>
    </div>
  