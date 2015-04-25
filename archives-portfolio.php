<?php
/* Template Name: Portfolio */
 
 
get_header(); 
 
query_posts('post_type=portfolio&posts_per_page=9');
 
 
?>