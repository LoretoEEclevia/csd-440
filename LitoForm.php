<!--
Loreto E Eclevia
Module 7
Bellevue University
September 17, 2024

Write a form program that prompts a user to enter seven different fields of data, using a minimum of four different data type entries:
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LitoForm</title>
</head>
<body>
    <form action="testphp.php" method="POST">
        <!--asking user to input following data  -->
        Enter your School Name: <input type="text" name="name"> <br><br>
        Enter your college degree: <input type="text" name="Bachelor of Science"> <br><br>
        Email: <input type="Email" name="email"> <br><br>
        Date of graduation: <input type="Date" name="Month and Year"> <br><br>
        Enter your full name: <input type="Name" name="First Name, Last Name, Middle Initial"> <br><br>
        Phone: <input type="phone" name="Phone number"> <br><br>
        Address: <input type="address" name="Home address"> <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>



        <!--create a php file name "testphp.php" under the htdocs folder again and save the following code in it:-->

    <?php
            //checking if user has entered valid data or not
            if(($_POST['name'] == "john") && ($_POST['pwd'] == "123") && ($_POST['email'] == "john@mail.com") && ($_POST['roll'] == 17) && ($_POST['class'] == 10) && ($_POST['phone'] == 12345) && ($_POST['address'] == "xyz"))
            {
                echo $_POST['name'] . "<br>";
                echo $_POST['pwd'] . "<br>";
                echo $_POST['email'] . "<br>";
                echo $_POST['roll'] . "<br>";
                echo $_POST['class'] . "<br>";
                echo $_POST['phone'] . "<br>";
                echo $_POST['address'] . "<br>";
            }
            //else print the following message
            else
            {
                echo "Please enter valid data !!";
            }
    ?>
</body>
</html>
