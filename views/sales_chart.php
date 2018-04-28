<?php
ob_start(); ?>
&nbsp;

<div class="container">
  <canvas id="myChart" width="400" height="200"></canvas>
</div>
<?php
$title = 'test';
$content = ob_get_clean();
include 'includes/layout.php'
?>
