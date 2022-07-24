<?php
// write function that take html code and print it
// example <div class="alert alert-info">alert alert-info</div>
function converter($html){
echo htmlspecialchars(str_replace('"','\"' ,$html),ENT_QUOTES);
}