<?php
if (isset($_GET['callback'])) {
    $arr = array('a' => 1, 'b' => 2, 'c' => 3);
    echo $_GET['callback'] . '(' . json_encode($arr) . ')';
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<button type="button" id="btn">Click me</button>
<script src="https://unpkg.com/jquery@1"></script>
<script src="../src/jquery.jsonp.js"></script>

<script>
document.getElementById('btn').onclick = function () {
  $.jsonp({
    url: 'index.php?callback=?',
    success: function () {
      console.log(arguments)
    }
  })
}
</script>
</body>
</html>
<?php } ?>
