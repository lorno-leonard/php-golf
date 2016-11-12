<?php
header('Content-type: text/plain');
function f($i) {
  foreach($i as$v)echo is_array($v)?f($v):$v."
";
}
f([
  1,
  [
    2,
    3
  ],
  4,
  [
    5,
    [
      6,
      7
    ]
  ],
  8
]);

/* Expected output
  1
  2
  3
  4
  5
  6
  7
  8
*/