<!DOCTYPE html>
<html lang="en">



<?php
 include_once "head.php";
 include_once "header.php";
 ?>

<body>
    <h3> Home / Gaming Headsets </h3>
    <h4> GAMING HEADSETS </h4>

    <div id="shop">
        <div class="sidebar">

            <div class="sidebarbox">
                <h6>PLATFORM</h6>
                <hr class="lijn2">
                <p><input type="checkbox" name="plat" value="form" /> PC</p>
                <p><input type="checkbox" name="plat" value="form" /> PC/Mac</p>
                <p><input type="checkbox" name="plat" value="form" /> Xbox</p>
                <p><input type="checkbox" name="plat" value="form" /> Nintendo Switch</p>
                <p><input type="checkbox" name="plat" value="form" /> Mobile</p>
            </div>

            <hr class="lijn">

            <div class="sidebarbox">
                <h6>CONNECTIVITY</h6>
                <hr class="lijn2">
                <p><input type="checkbox" name="connect" value="wired" /> Wired 3.5mm </p>
                <p><input type="checkbox" name="connect" value="wired" /> Wireless USB</p>
                <p><input type="checkbox" name="connect" value="wired" /> Wired USB</p>
                <p><input type="checkbox" name="connect" value="wired" /> Bluetooth</p>
                <p><input type="checkbox" name="connect" value="wired" /> Wired 3.5m</p>
            </div>

            <hr class="lijn">

            <div class="sidebarbox">
                <h6>AUDIO</h6>
                <hr class="lijn2">
                <p><input type="checkbox" name="aud" value="io" /> Stereo</p>
                <p><input type="checkbox" name="aud" value="io" /> Surround Sound</p>
                <p><input type="checkbox" name="aud" value="io" /> 3D Audio</p>
            </div>
            <hr class="lijn">
        </div>

       <?php
        include_once "products.php";
       ?>
       </div>


<div class="blackbar">
    <div class="logo2"><img src="img/hyperxlogonobackground.png" alt="logo" width="200" height="50"></div>
</div>

<?php
include_once "footer.php";
?>
</body>
</html>