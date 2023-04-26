<?php
$text = "The blog is good for blog.com and www.blog.com or wp-blog-header and it is not good for blog1 or blogs or sblogs. %blog %blog% -blog -blog-";
$word_to_replace = "blog";
// $pattern = "/(?<!\.)\b{$word_to_replace}\b(?!\.)/";
// $pattern = '/(?<![^\W_])(blog)(?![^\W_])(?!\/)/i'; // exclude matches in URLs
// $pattern = "/(?<=\b" . preg_quote($word_to_replace) . "\b)(?!\W)/i";
// $pattern = "/\b{$word_to_replace}\b(?=\w)/";
// $pattern = "/(?<!\.)\b{$word_to_replace}\b(?=[^\w\s-]|$)/";
// $pattern = "/(?<!\.)\b{$word_to_replace}\b(?=[^\w\s-])/";

// $pattern = "/(?<!\w)[[:alpha:]]+{$word_to_replace}(?!\w)/";

$pattern = "/(?<=\s|\A)\b{$word_to_replace}\b(?!\.\w+)/";
$new_word = 'blog1';
$new_text = preg_replace($pattern, $new_word, $text);
echo $new_text;




