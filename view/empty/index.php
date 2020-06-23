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
                        <h1 class="display-2">Marimo</h1>
                        <h3>geheel naar uw smaak!</h3>
                        <button type="button" class="btn btn-outline-light btn-lg">aanvragen</button>
                    </div>
                </div>
                <div class="carousel-item">
				<img src="<?=URL?>public/images/background.png">
                    <div class="carousel-caption">
                        <h1 class="display-2">Marimo</h1>
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

        <!--- Welcome Section -->
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">Wij YTC</h1>
                </div>
                <hr>
                <div class="col-12">
                    <p class="lead">Welkom bij Marimo!</p>
                </div>
            </div>
        </div>

        <!--- Three Column Section -->
        <div class="container-fluid padding">
            <div class="row text-center padding">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fa fa-code"></i>
                    <h3>HTML5</h3>
                    <p>Gebouwd met de laatste versie van HTML, HTML5.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fa fa-bold"></i>
                    <h3>Bootstrap</h3>
                    <p>Gebouwd met de laatste versie van Bootstrap, Bootstrap 4.</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <i class="fa fa-css3"></i>
                    <h3>CSS3</h3>
                    <p>Gebouwd met de laatste versie van CSS, CSS3.</p>
                </div>
            </div>
            <hr class="my-4">
        </div>

        <!--- Two Column Section -->
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="col-lg-6">
                    <h2>if you build it...</h2>
                    <p>hoih oiohoioioyfjr htrhe rtgergwerg re wgrwegrsg rsgd srgsrgtger sgersg ersgrg ersgersg</p>
                    <p>hoiho ioho ioioyfjrh trhertgergwe rgrewgr wegrsgrsgdsrg srgtgersgersgersgrg ersge rsghoi hoiohoioioyf jrhtrhert</p>
                    <p>hoihoioh oi oioyfjrhtrhertge rgwergrewgrw egrsgrs gdsrgsrgt gersgers gersgrgersg ersg</p>
                    <br>
                    <a href="#" class="btn btn-primary">meer leren</a>
                </div>
                <div class="col-lg-6">
                    <img src="~/img/desk.png" class="img-fluid">
                </div>
            </div>
        </div>

        <hr class="my-4">

        <!--- Fixed background -->
        <figure>
            <div class="fixed-wrap">
                <div id="fixed">
                </div>
            </div>
        </figure>

        <!--- Emoji Section -->
            <button class="fun" data-toggle="collapse" data-target="#emoji">click for fun</button>
            <div id="emoji" class="collapse">
                <div class="container-fluid padding">
                    <div class="row text-center">
                        <div class="col-sm-6 col-md-3">
                            <img class="gif" src="~/img/gif/panda.gif">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="gif" src="~/img/gif/poo.gif">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="gif" src="~/img/gif/unicorn.gif">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="gif" src="~/img/gif/chicken.gif">
                        </div>
                    </div>
                </div>
            </div>

            <!--- Connect -->
            <div class="container-fluid padding">
                <div class="row text text-center padding">
                    <div class="col-12">
                        <h2>connect</h2>
                    </div>
                    <div class="col-12 social padding">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/marimo_websites"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
