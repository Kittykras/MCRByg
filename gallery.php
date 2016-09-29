<?php
include './includes/top.inc.php';
include './includes/menu.inc.php';
?>
<div class="container" data-spy="scroll" data-target=".list-group" data-offset="50">
    <div class="headline">
        <h4>Galleri</h4>
    </div>
    <div class="content">
        <div class="section group">
            <div id="gallery" class="col span_1_of_3">
                <ul class="list-group">
                    <li  class="list-group-item"><a href="#galleryDest" onclick="openGallery(this.text)"><span class="glyphicon glyphicon-picture"></span> Kviste</a></li>
                    <li  class="list-group-item"><a href="#galleryDest" onclick="openGallery(this.text)"><span class="glyphicon glyphicon-picture"></span> Tilbygninger</a></li>
                    <li  class="list-group-item"><a href="#galleryDest" onclick="openGallery(this.text)"><span class="glyphicon glyphicon-picture"></span> Køkken</a></li>
                    <li  class="list-group-item"><a href="#galleryDest" onclick="openGallery(this.text)"><span class="glyphicon glyphicon-picture"></span> Tag</a></li>
                    <li  class="list-group-item"><a href="#galleryDest" onclick="openGallery(this.text)"><span class="glyphicon glyphicon-picture"></span> Terrasser</a></li>
                    <li  class="list-group-item"><a href="#galleryDest" onclick="openGallery(this.text)"><span class="glyphicon glyphicon-picture"></span> Trapper</a></li>
                    <li  class="list-group-item"><a href="#galleryDest" onclick="openGallery(this.text)"><span class="glyphicon glyphicon-picture"></span> Træ konstruktioner</a></li>
                    <li  class="list-group-item"><a href="#galleryDest" onclick="openGallery(this.text)"><span class="glyphicon glyphicon-picture"></span> Lofter</a></li>
                    <li  class="list-group-item"><a href="#galleryDest" onclick="openGallery(this.text)"><span class="glyphicon glyphicon-picture"></span> Borde/Skilte</a></li>
                    <li  class="list-group-item"><a href="#galleryDest" onclick="openGallery(this.text)"><span class="glyphicon glyphicon-picture"></span> Gulve</a></li>
                    <li  class="list-group-item"><a href="#galleryDest" onclick="openGallery(this.text)"><span class="glyphicon glyphicon-picture"></span> Gips</a></li>
                </ul>
            </div>
            <div id="galleryDest" class="col span_2_of_3">

            </div>
        </div>
    </div>
</div>
<?php
include './includes/footer.inc.php';
?>
<script>
    function openGallery(value) {
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                document.getElementById("galleryDest").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "database/openGallery.php?q=" + value, true);
        xmlhttp.send();
    }
</script>