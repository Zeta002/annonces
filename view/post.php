<?php
require_once 'model.php';

$post = getPost( $_GET['id'] );

// inclut le code de la présentation HTML
require 'view/post.php';