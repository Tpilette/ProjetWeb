<?php
if(session_id() == '') {session_start();}
$title="Bienvenue";
$content="Welcome";
include 'includes/template.php';
?>
