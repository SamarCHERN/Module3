<?php
usort($articles, function($x, $y) {
  return strtotime($x['Date_publication']) <=> strtotime($y['Date_publication']);
});
$articles=array_reverse($articles);
// $a=count($articles);
$n=count($articles);
function getArticles($n=null){
global $articles;
if($n==null or $n>count($articles)){$n=count($articles);}
$t=array();
for ($x = 0; $x <$n; $x++) {
  $t[]=$articles[$x];
}
return($t);
} 

?>
