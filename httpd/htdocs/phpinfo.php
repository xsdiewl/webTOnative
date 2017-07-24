<?php 
include "theme/header.php";
?>
<script>
function getData(data) {
document.getElementById('display_area').innerHTML=data;
}
</script>
<iframe src="pinfo.php" style="display:none"></iframe><br/>

<div class="" id="display_area">

Loading...

</div>
<?php
include "theme/footer.php";
?>