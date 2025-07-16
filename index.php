<?php 

require_once 'Vista/Forms.php';

$forms = new Forms();
$formRegister = $forms->registerForm();

echo $formRegister;

