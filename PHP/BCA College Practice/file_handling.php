<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST['sname'];
        $rollno = $_POST['rollno'];
        $class = $_POST['sclass'];
        $phone = $_POST['sphone'];
        $email = $_POST['semail'];
        $address = $_POST['saddress'];

        $text = "$name, $rollno, $class, $phone, $email, $address\n\n";
        $file = fopen("data.txt", "a+") or die("Unable To Open File");
        fwrite($file, $text);
        fclose($file);

    }
else{
    ?>
    <form action="#" method="POST">
        <label for="sname">Student Name: </label>
        <input type="text" id="sname" name="sname"><br><br>
        <label for="rollno">Std. Roll No: </label>
        <input type="number" name="rollno" id="rollno"><br><br>
        <label for="sclass">Class:</label>

        <select name="sclass" id="sclasss">
        <option value="BCA">BCA</option>
        <option value="CSIT">CSIT</option>
        <option value="BIM">BIM</option>
        <option value="BHM">BHM</option>
        </select> <br>
        <label for="sphone">Phone: </label>
        <input type="tel" name="sphone" id="sphone"><br><br>
        <label for="semail">Email: </label>
        <input type="email" name="semail" id="semail">
        <br><br>
        <label for="address">Address: </label>
        <input type="text" name="saddress" id="saddress"><br><br>
        <input type="submit" value="Save"><br><br>
        <input type="reset" value="Cancel">
    </form>
            <?php
        }
        ?>
</body>
</html>