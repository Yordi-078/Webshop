<?php 

?>

<div>
        <!--- Image Slider -->
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?=URL?>public/images/background.png">
                    <div class="carousel-caption">
                        <h1 class="display-2">YTC</h1>
                        <h3>Wij hebben al onze producten voor u klaar staan!</h3>
                        <button type="button" class="btn btn-outline-light btn-lg">bekijken</button>
                    </div>
                </div>
                <div class="carousel-item">
					<img src="<?=URL?>public/images/background.png">
                    <div class="carousel-caption">
                        <h1 class="display-2">YTC</h1>
                        <h3>geheel naar uw smaak!</h3>
                        <button type="button" class="btn btn-outline-light btn-lg">aanvragen</button>
                    </div>
                </div>
                <div class="carousel-item">
				<img src="<?=URL?>public/images/background.png">
                    <div class="carousel-caption">
                        <h1 class="display-2">YTC</h1>
                        <h3>of kies een vooraf gemaakte layout</h3>
                        <button type="button" onclick="" class="btn btn-outline-light btn-lg">bekijken</button>
                    </div>
                </div>
            </div>
        </div>
        <!--- Jumbotron -->
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
