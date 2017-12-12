<?php
/* Set e-mail recipient */
$myemail  = "jeremyram222@gmail.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Enter your name");
$email  = check_input($_POST['email']);
$message    = check_input($_POST['message']);
$subject = 'website';

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("1");
}

/* If URL is not valid set $website to empty */


/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

Name: $name
E-mail: $email

Message:
$message

End of message
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
show_error("2");
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error("3");
    }
    return $data;
}

function show_error($myError)
{
    if($myError == "1"){
        header("location: index.php?status=1");
    }else if($myError == "2"){
        header("location: index.php?status=2");
    }else if($myError == "3"){
        header("location: index.php?status=3");
    }

exit();
}
?>