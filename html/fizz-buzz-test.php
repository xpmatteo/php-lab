<html>
  <head>
    <meta encoding="utf-8">
    <title>fizz-buzz-test</title>
    <style>
    body {
      font-family: sans-serif;
      width: 450px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 3em;
    }
    </style>
  </head>
  <body>
    <h4>Problem statement</h4>
    <p>
      Write a program that prints the numbers from 1 to 100.
      But for multiples of three print "Fizz" instead of the
      number and for the multiples of five print "Buzz". For
      numbers which are multiples of both three and five
      print "FizzBuzz".
    </p>

    <p>
      Sample output: <br>
      1 2 Fizz 4 Buzz Fizz 7 8 Buzz Fizz 11 Buzz ...
    </p>

    <h4>Test output</h4>
    <?php
    include 'fizz-buzz.php';
    include 'asserts.php';


    assert_equal(1, fizz_buzz(1));
    // assert_equal(2, fizz_buzz(2));
    // assert_equal("fizz", fizz_buzz(3));
    // assert_equal(4, fizz_buzz(4));
    // assert_equal("buzz", fizz_buzz(5));
    // assert_equal("fizz", fizz_buzz(6));

    print_assertion_errors();
    ?>
  </body>
</html>

