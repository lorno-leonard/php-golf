<?php
header('Content-type: text/plain');
for($y = 100; $y--;) {
  $u = (($t = $y) + 99) % 100;
  printf(
    "%s bottle%s of beer on the wall, %s bottle%s of beer.\n%s",
    $y > 0 ? $t : "No more",
    $s = $y != 1? "s" : "",
    $y > 0 ? $t : "no more",
    $s,
    $y > 0 ? "Take one down and pass it around" : "Go to the store and buy some more"
  );
  printf(
    ", %s bottle%s of beer on the wall.\n\n",
    $y != 1 ? $u : "no more",
    $y != 2 ? "s" : ""
  );
}