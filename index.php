<!DOCTYPE html>
<html>
    <head>
        <title>
            Log On form
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css?v=0.0.1">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h1 id="title-logon">Student Log In</h1>
            <div id="logout"></div>
        </div>
        <hr>
        <div class="wrapper-main" id="app">
            <form action="" method="post" onsubmit="processdata(); return false;">
                <input name="name" type="text" placeholder="name" class="input-b" id="name" required>
                <input name="email" type="email" placeholder="email" class="input-b" id="email" required>
                <input name="contact" type="number" placeholder="contact" class="input-b" id="number" required>
                <input type="submit" class="button">
            </form>
        </div>
        <script>
            function reset() {
                $("#title-logon").text("Student Log In");
                $("#logout").html("");
                $("#app").html(`
                <form action="" method="post" onsubmit="processdata(); return false;">
                <input name="name" type="text" placeholder="name" class="input-b" id="name" required>
                <input name="email" type="email" placeholder="email" class="input-b" id="email" required>
                <input name="contact" type="number" placeholder="contact" class="input-b" id="number" required>
                <input type="submit" class="button">
            </form>
                `);
            }
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
                        $("#app").html(response);
                        $("#logout").html('<h3 class="reset" onclick="reset();">Log Out</h3>');
                    },
                    error: function() {
                        $("#app").html("houston, we got a problem");
                    }
                });
            }    
        </script>
        <style>
            .reset {
                cursor: pointer;
            }     
            .reset:hover {
                text-decoration: underline;
            }
            th {
                padding: 0.5em 1em;
            }
            td {
                padding: 0.5em 1em;
                border-top: 1px solid #000;
                border-bottom: 1px solid #000;
                background: antiquewhite;
                border-left: 25px solid antiquewhite;
                border-right: 25px solid antiquewhite;
            }
        </style>
    </body>
</html>