<?php ob_start(); ?>

    <script type="text/javascript" src="public\js\statsCharts.js"></script>
<div class="row">
    <div class="col-6" id="soldByTitle"></div>
</div>

<?php
    $title="Statistique";
    $content=ob_get_clean();
?>
