<?php
if(isset($_POST['name'])){
    // $email = htmlentities($_POST['email']);
    // $name = htmlentities($_POST['name']);

    // echo $name;
    echo htmlentities($_POST['email']);
    // echo "Your name : $name".' '."email : $email";

//    print_r($name.' and '.$email);
// print_r($_POST);
// var_dump($email);

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>get_post method</title>
    </head>
    <body>
        <form method="POST" action="get_post.php">
            <div>
                <label for="name">name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="email">email</label>
                <input type="text" name="email">
            </div>
            <input type="submit" value="submit">
        </form>
    </body>
</html>