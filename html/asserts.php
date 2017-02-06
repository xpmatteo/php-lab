<?php

$errors = [];

function assert_equal($expected, $actual, $message="") {
  global $errors;
  if ($expected === $actual) {
    echo ".";
  } else {
    echo "E";
  }
  $errors[] = "Expected $expected but got $actual $message";
}

function print_assertion_errors() {
  global $errors;
  echo "<br>";
  foreach ($errors as $error) {
    echo "<p>$error</p>";
  }
}