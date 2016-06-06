<html>
<head>
    <title><?php echo $title?></title>
    <style>
        body{background-color:grey;}
        form{background-color:purple;}
        h1{position:relative; color:blue;}
        </style>
</head>
<body>
        <h1><?php echo $heading?></h1>
        <p> <?php  echo $content ?></p>
        <form>
           State: <input id="mystates" type="text" name="states">
           State: <input id="mystates1" type="text" name="states1">
           State: <input id="mystates2" type="text" name="states2">
           State: <input id="mystates3" type="text" name="states3">
        </form>
        <p> <?php echo$content2?></p>
        <form>
           State: <input id="mystatez" type="text" name="statez">
           State: <input id="mystatez1" type="text" name="statez1">
           State: <input id="mystatez2" type="text" name="statez2">
           State: <input id="mystatez3" type="text" name="statez3">
        </form>
        <p> <?php echo $query ?></p>
</body>
</html>




