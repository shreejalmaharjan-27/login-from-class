<?php
$name = htmlentities($_POST['name']);
$number = htmlentities(is_numeric($_POST['contact']));
$email = htmlentities($_POST['email']);
if($name && $number && $email) {
    echo "<script>
            $(\"#title-logon \").text(\"Welcome, $name\");
            </script>
    ";
    echo <<<HTML
    <table>
    <tr>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
    </tr>
    <tr>
        <td>{$name}</td>
        <td>{$number}</td>
        <td>{$email}</td>
    </tr>
    </table>

HTML;
}
else {
    http_response_code(403);
}