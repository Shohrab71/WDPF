<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tooltip Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h1 class="jumbotron">Popover</h1>
    <a href="#" data-toggle="popover" title="Bangladesh" data-content="Bangladesh is a southasian country one of the most emerging economic country in southasia" data-placement="right">Bangldesh</a>
  <br><br><br><br><br><br>
    <a href="" data-toggle="tooltip" title="Bangladesh is a green country" data-placement="right">Bangladesh</a>

</div>


<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

</body>
</html>
