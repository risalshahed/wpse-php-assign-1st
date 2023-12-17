<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Simple PHP</title>

    <style>
      * {
        margin: 0;
      }
      .quote {
        display: flex;
        justify-content: center;
        background-color: lightgray;
        padding: 16px 0;
        width: 50%;
        margin: auto;
        box-shadow: 8px 8px 18px #ccc;
        position: relative;
        animation-name: example;
        animation-duration: 4s;
      }
      @keyframes example {
        0%   {background-color:#eee; left:-100px; top:0px;}
        25%  {background-color:#ddd; left:100px; top:0px;}
        50%  {background-color:#ccc; left:100px; top:200px;}
        75%  {background-color:#bbb; left:0px; top:200px;}
        100% {background-color:#aaa; left:0px; top:0px;}
      }
    </style>
  </head>

  <body>
    <?php
$quotes = array(
  array( "The way to get started is to quit talking and begin doing.", "– Walt Disney" ),
  array( "If life were predictable it would cease to be life, and be without flavor. ", "– Eleanor Roosevelt" ),
  array("It is during our darkest moments that we must focus to see the light", "- Aristotle"),
  array("Whoever is happy will make others happy too", "- Frank"),
  array("Do not go where the path may lead, go instead where there is no path and leave a trail", "- Ralph Waldo Emerson"),
  array("You will face many defeats in life, but never let yourself be defeated", "- Maya Angelou"),
  array("I never dreamed about success, I worked for it", "- Estee Lauder"),
  array("It is better to fail in originality than to succeed in imitation", "- Herman Melville"),
);

$quotes_length = count($quotes);
// echo $quotes_length;
$random_number = rand(0, $quotes_length - 1);
// echo $random;

foreach($quotes[$random_number] as $quote) {
  ?>
  <div class="quote">
    <?php echo $quote; ?>
  </div>
  <?php
}


?>

  </body>

</html>