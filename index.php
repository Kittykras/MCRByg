<?php
include './includes/top.inc.php';
include './includes/menu.inc.php';
?>
<div class="container">
    <div id="frontpage-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#frontpage-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#frontpage-carousel" data-slide-to="1"></li>
            <li data-target="#frontpage-carousel" data-slide-to="2"></li>
            <li data-target="#frontpage-carousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="box-shadow">
                    <img src="images/skilt.jpg" alt="...">
                </div>
                <div class="carousel-caption">
                    <h3>MCR Byg</h3>
                    <p>Tømrerarbejde efter dine ønsker</p>
                </div>
            </div>
            <div class="item ">
                <div class="box-shadow">
                    <img src="images/Håndværk.jpg" alt="...">
                </div>
                <div class="carousel-caption">
                    <h3>MCR Byg</h3>
                    <p>Tømrerarbejde efter dine ønsker</p>
                </div>
            </div>
            <div class="item">
                <div class="box-shadow">
                    <img src="images/Hammer.jpg" alt="...">
                </div>
                <div class="carousel-caption">
                    <h3>MCR Byg</h3>
                    <p>Tømrerarbejde efter dine ønsker</p>
                </div>
            </div>
            <div class="item">
                <div class="box-shadow">
                    <img src="images/Værktøj.jpg" alt="...">
                </div>
                <div class="carousel-caption">
                    <h3>MCR Byg</h3>
                    <p>Tømrerarbejde efter dine ønsker</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#frontpage-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#frontpage-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container">
    <div class="section group">
        <div class="col span_1_of_2" align="middle">
            <a class="hover" href="about.php">
                <div class="frontpage-link img-circle" align="middle">
                    <img width="70" height="70" src="images/Construction Worker-100.png">
                </div>
            </a>
            <div class="text">
                <h4>Om MCR Byg</h4>
            </div>
        </div>
        <div class="col span_1_of_2" align="middle">
            <a class="hover" href="providing.php">
                <div class="frontpage-link img-circle" align="middle">
                    <img width="70" height="70" src="images/Toolbox-100.png">
                </div>
            </a>
            <div class="text">
                <h4>Jeg Tilbyder</h4>
            </div>
        </div>
    </div>
    <div class="section group">
        <div class="col span_1_of_2" align="middle">
            <a class="hover" href="references.php">
                <div class="frontpage-link img-circle" align="middle">
                    <img width="70" height="70" src="images/Collaboration-100.png">
                </div>
            </a>
            <div class="text">
                <h4>Referencer</h4>
            </div>
        </div>
        <div class="col span_1_of_2" align="middle">
            <a class="hover" href="contact.php">
                <div class="frontpage-link img-circle" align="middle">
                    <img width="70" height="70" src="images/Business Contact Filled-100.png">
                </div>
            </a>
            <div class="text">
                <h4>Kontakt Mig</h4>
            </div>
        </div>
    </div>
</div>

<?php
include './includes/footer.inc.php';
?>
<div class="center">
    <div class="bottom" align="left">
        <p><small>© Link icons made by <a href="https://icons8.com/">Icons8</a></small></p>
    </div>
</div>
