<?php
$name = htmlentities($_POST['name']);
$number = htmlentities($_POST['contact']);
$email = htmlentities($_POST['email']);
echo $name;