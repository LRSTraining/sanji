<?php 

use App\home\Home as Home;
use App\user\User as User;
use App\post\Post as Post;

require 'app/init.php';


$home = new Home;
$post = new Post;
$user = new User;

var_dump($post->index());