<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Demo</title>
    </head>
    <body>
        <div class="form">
            <h2>Contact Form</h2>
            <form action="form_insert.php" method="post">
                <label for="fullName">Name :- </lable>
                <input type="text" name="fullName" required>
                <label for="phoneNumber">Phone No. :- </lable>
                <input type="text" name="phoneNumber" required>
                <label for="email">Email Id :- </lable>
                <input type="text" name="email" required>
                <label for="subject">Subject :- </lable>
                <input type="text" name="subject" required>
                <label for="message">Message :- </lable>
                <input type="text" name="message" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
    </html>