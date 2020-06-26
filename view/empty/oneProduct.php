

<div class="row">
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
  </div>
</div>
    </div>
    </div>
  