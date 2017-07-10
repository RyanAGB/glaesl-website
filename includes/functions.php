<?php 

function getUriSegments() {
    return explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}
 
function getUriSegment($n) {
    $segs = getUriSegments();
    return count($segs)>0&&count($segs)>=($n-1)?$segs[$n]:'';
}

 ?>