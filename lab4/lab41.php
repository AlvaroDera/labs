<?php
if($_REQUEST['venta'] >=80)
{
    echo "<img src='img/img1.png'>";
}
else if($_REQUEST['venta'] >= 50 && $_REQUEST['venta']<=79)
{
    echo "<img src='img/img2.png'>";
}else {
    echo "<img src='img/img3.png'>";
}
?>