<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div>sdsdf</div>
    <script>
    
    // alert("Hello...");
    
    </script>
<!-- 
<script>
				function myNew(){
					var value = JSON.parse(localStorage.getItem('url'));

					jQuery.post("sample.php", {mykey: value}, function(data){

					alert ("Open Example.php");
					})
				}

</script> -->

    <?php
    $value = $_POST['mykey'];
               
    echo $value;
    // echo " <script>console.log('$value') </script>";
    
    
    ?>
</body>
</html>