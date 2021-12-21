<h1>Homepage</h1>

<?php echo route('about'); ?>

<?php 

$post = 5;
$comment = 10;

// echo url('post/'.$post.'/comments/'.$comment);
echo route('posts', [$post, $comment]);

?>

<a href="<?php echo url('/'); ?>">Home</a>

<a href="<?php echo url('/about') ?>">About</a>

<a href="<?php echo url('contact') ?>">Contact</a>