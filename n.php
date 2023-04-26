<?php
$str = "The blog is good for blog.com and www.blog.com or wp-blog-header and it is not good for blog1 or blogs or sblogs. %blog %blog% -blog -blog-";

// Replace occurrences of the word 'blog' only if it's not part of a domain name     
$str = preg_replace('/(?<=\s|\A)\bblog\b(?!\.\w+)/', 'dog', $str);

echo $str;