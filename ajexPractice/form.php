<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>form</title>
</head>

<body>
    <form onsubmit="return check()">
        <h2>Enter your name: </h2>
        <input type="text" class="name" name="name" placeholder="Enter your name">
        <p class="output"></p>
        <button type="submit" class="btn">check</button>
    </form>


</body>
<script>
    function check(){
        var name = $(".name").val();
        $.get('data.php', {name : name}, function(response){
            $(".output").html(response);
        });
        return false;
    }
</script>

</html>

