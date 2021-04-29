<?php $thisCat = "company"; ?>

<?php require_once('header.php'); ?>
<main class="site-main site-main--aside hasUiAutocomplete">
    <section class="page-content page-content--company">
        <div class="page-content__wrapper">
            <section class="company product specialist">
                <div class="company__header company__header--main">
                    <div class="company__header-content">
                        <div class="company__header-top">
                            <div class="specialist__header-left">
                                <div class="specialist__photo">
                                    <img src="../img/1.jpg">
                                </div>
                                <div class="specialist__name">
                                    <h3>Vardenis</h3>
                                    <h3>Pavardenis</h3>
                                    <h4>Pareigos</h4>
                                </div>
                            </div>
                            <button class="button small gray transparent product__block-like product__block-like--active">Mano</button>
                        </div>
                        <ul class="company__nav">
                            <li class="active"><a href="#registruokis">Registruokis nemokamai</a></li>
                            <li><a href="#apie-specialista">Apie specialistą</a></li>
                        </ul>
                    </div>
                </div>
                <section class="company__tab" id="apie-specialista">
                    <h3>Apie specialistą</h3>
                    <div class="details">
                        <div class="details__item details__item--experience">
                            <h4>19 metų</h4>
                            <p>Darbo patirtis</p>
                        </div>
                        <div class="details__item details__item--languages">
                            <h4>Lietuvių | Anglų | Rusų</h4>
                            <p>Kalba</p>
                        </div>
                        <div class="details__item details__item--payment">
                            <h4>Grynais ir kortele</h4>
                            <p>Atsiskaitymas vietoje</p>
                        </div>
                        <div class="details__item details__item--payment">
                            <h4>-10% <span>02:02:05</span></h4>
                            <p>Paskutinės valandos pasiūlymas</p>
                        </div>
                    </div>
                    <h4>Profesinis lygis</h4>
                    <div class="specialist__profession">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet massa tempus, ornare nibh sed, euismod mauris. Pellentesque ut turpis lorem. Vivamus semper diam pellentesque tempus consequat. Phasellus volutpat, justo quis laoreet lacinia, quam felis eleifend risus, quis dapibus orci urna at augue. Curabitur non eros fringilla, fermentum tellus ut, lacinia magna. Aenean sed placerat neque, sit amet consequat dolor. Proin tincidunt dolor nec nunc vestibulum congue. Nam id semper magna, eget tempor mauris. Donec a aliquam metus, sollicitudin auctor urna. Ut sit amet orci sapien. Nunc vehicula elit justo, eget pharetra massa maximus vitae. Morbi ullamcorper fringilla felis, sit amet fringilla nibh pulvinar vitae. Aliquam volutpat dolor ex, ut facilisis risus fringilla sit amet. Integer vel scelerisque ipsum, at placerat nisi. Suspendisse et mi a turpis pretium porta at sit amet nisi. Nulla varius vitae justo nec vehicula.
                    </div>
                    <h4>Adresas</h4>
                    <div class="specialist__address">
                        <div class="photo-slider">
                            <div class="photo-slider__slide">
                                <div class="photo-slider__slide-content">
                                    <img src="../img/Layer-2.png">
                                </div>
                            </div>
                            <div class="photo-slider__slide">
                                <div class="photo-slider__slide-content">
                                    <img src="../img/Layer-2.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <?php require_once('footer-menu.php'); ?>
        </div>
    </section>
</main>

<?php require_once('footer.php'); ?>