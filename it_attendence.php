<?php
                error_reporting(0);
?>

<?php  
$conn = mysqli_connect('localhost','root','','attendance');
if(isset($_POST['submit']))
{
    foreach($_POST['attendence_status'] as $id=>$attendence_status)
    {
       $name =$_POST['name'][$id];
       $roll = $_POST['roll'][$id];
       $mail = $_POST['email'][$id];
       mysqli_query($conn,"insert into it_attendence(name,roll_no,email,status) values('$name','$roll','$mail','$attendence_status')");

    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body{
            color: purple;
            background-size: cover;
            background-repeat: no-repeat;
            background-image:url("l.webp")

        }
        button{
            color:purple;
        }
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Attendance</title>
    <link rel="stylesheet" href="Attendence.css" />
    <link rel=""> </head>

<body>
    <script src="attendance.js">

    </script>
    <center><label class="ed1">
        <h2>IT Attendance</h2>
            <h3 style="">Take Attendance (Today's Date :
                <?php echo $todaysDate = date("m-d-Y"); ?>)</h1>
    </center>
    <button><a href="studentForm.php" style="color:black; text-decoration:none;">Add Student</a></button>
    <br><br>
    <form action="it_attendence.php" method="post">
        <table class="table">
            <thead>
                <th name="present" class="att">Sr.no</th>
                <th name="rollno">Roll No.</th>
                <th name="sname">Name</th>
                <th name="email">Email ID</th>
                <th name="present" class="att">Attendence</th>
            </thead>
            <tbody>
                <?php
                error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'attendance');                $result = mysqli_query($conn,"select * from student where dept_id=2");
                $serialnumber = 0;
                $counter= 0;
                while ($row = mysqli_fetch_array($result)) {
                    $serialnumber++;
                    ?>
                    <tr>
                        <td><?php echo $serialnumber ?></td>
                        <td>
                        <?php echo $row['name'] ?>
                        <input type="hidden" value="<?php echo $row['name'] ?>"  name="name[]">

                        </td>
                        <td>
                            <?php echo $row['roll_no'] ?>
                            <input type="hidden" value="<?php echo $row['roll_no'] ?>"  name="roll[]">
                        </td>
                        <td>
                            <?php echo $row['email'] ?>
                            <input type="hidden" value="<?php echo $row['email'] ?>" name="email[]">

                        </td>
                        <td>
                            <input type="radio" name="attendence_status[<?php echo $counter; ?>]" id="" value="present" required checked>Present 
                            <input type="radio" name="attendence_status[<?php echo $counter; ?>]" id="" value="absent" required>Absent
                        </td>

                        <!-- <td name="present"><button id="a1" class="but" onclick="demo1()">&#10004</button> &nbsp;&nbsp;&nbsp;<button onclick="demo2()" id="b1" class="but1" onclick="demo2()">&#10006</button></td> -->
                    </tr>
                <?php 
                                    $counter++;
            }
             ?>
            </tbody>
        </table>
        <center><br><br><button class="sub" name="submit" value="Save Data" onclick="savedata.php">Submit</button>
        <button type="reset" class="sub">Reset</button>
        </center>
    </form>
<button><a href="it_view_attendence.php" style="color:black; text-decoration:none;">view_attendence</a></button>

</body>
</html>