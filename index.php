<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>費式數列</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <style>
          body{
            background-color: lightgreen;
          }
          h1{
            text-align: center;
          }
          form{
            text-align: center;
          }
          input{
            font-size: 30px;
          }
          #fib{
            text-align: center;
            font-size: 25px;
          }
        </style>
</head>

<body>
  <h1>費式數列練習</h1>
  <form action="index.php" method="post">
    <input type="number" name="num" id="num" value="<?=$_POST['num']??0;?>" min="0" max="30">
    <input type="submit" value="送出">
  </form>
  <div id="fib">
    <?php
    echo "<br>";
    $n=$_POST['num']??0;
        function fib($n) {
            if ($n < 2) {
              return $n;
            }
          
            return fib($n - 1) + fib($n - 2);
          }
          echo fib(0);
          for($a=1;$a<=$n;$a++){
            echo " , ".fib($a);
          }
        echo "<br>";
        echo "<br>";
        echo "費式數列第{$n}項的值為 : ".fib($n);
    ?>
  </div>
</body>
    
</html>