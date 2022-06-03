<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h1>text area</h1>
    <input type="text" id="test">
    <!-- <textarea name="" id="test" cols="80" rows="10"></textarea> -->
    <button id="uppercase">uppercase</button>
    <button id="lowercase">lowercase</button>
    <p id="display"></p>
    <H1>SUMMARY</H1>
    <p id="para"></p>
    
    <script>
        $(document).ready(function(){
         $("#uppercase").on("click",function(){
            alert($("#test").val());
            let upper = $("#test").val();
            let countlen=upper;
            // length = upper.length;
            $.ajax({
				url:"server.php",
				method:"POST",
				data:{'info':upper},
				success:function(res){
			    console.log(res);
				$("#test").val(res);					
				}
			});
            
            $.ajax({
				url:"server.php",
				method:"POST",
				data:{'countletter':upper},
				success:function(result){
			    console.log(result);
				$("#para").html(result);					
				}
			});
         });

         $("#lowercase").on("click",function(){
            alert($("#test").val());
            var lower = $("#test").val();
            $.ajax({
				url:"server.php",
				method:"POST",
				data:{'infolower':lower},
				success:function(result){
			    console.log(result);
				$("#test").val(result);					
				}
			});

            $.ajax({
				url:"server.php",
				method:"POST",
				data:{'countletter':lower},
				success:function(result){
			    console.log(result);
				$("#para").html(result);					
				}
			});
         });
       });
    </script>

   

</body>
</html>