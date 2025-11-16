<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>
<body>
    <?php
        if(file_exists("data.txt")){
            $fp = fopen("data.txt", "r") or die("Unable To Open File");
            echo "<h1>Student Data</h1><br>";
          echo"<table border='1'> <tr><th>S.No</th><th>Student Name</th> <th>Roll No</th> <th>Class</th> <th>Phone</th><th>E-Mail</th> <th>Address</th> </tr>";
          $sno=0;
            while(!feof($fp)){
                $str = fgets($fp);
                $arr = explode(",", trim($str));
                if($arr[0]!="")
                    {
                        $sno++;
                        echo "<tr> <td>$sno</td><td>$arr[0]</td> <td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td> <td>$arr[5]</td></tr>";
                }
            }
            echo "</table>";
            fclose($fp);
        }
        else{
            echo "Student Data Doesn't Exit";
        }
    ?>
</body>
</html>