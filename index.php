<!DOCTYPE html>
<html>
    <head>
        <title>
            Log On form
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Student Log In</h1>
        <hr>
        <div class="wrapper-main">
            <form action="" method="post" onsubmit="processdata(); return false;">
                <input name="name" type="text" placeholder="name" class="input-b" id="name" required>
                <input name="email" type="email" placeholder="email" class="input-b" id="email" required>
                <input name="contact" type="number" placeholder="contact" class="input-b" id="number" required>
                <input type="submit" class="button">
            </form>
        </div>
        <script>
            function processdata() {
                var name = $("#name").val();
                var email = $("#email").val();
                var contact = $("#number").val();
                $.ajax({
                    url: "data.php",
                    method: "POST",
                    data: {
                        name: name,
                        email: email,
                        contact: contact
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function() {
                        console.log("houston, we got a problem");
                    }
                });
            }    
        </script>
    </body>
</html>