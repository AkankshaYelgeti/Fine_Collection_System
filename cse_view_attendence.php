<?php
                error_reporting(0);
?>

<?php
error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'attendance');
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $query = mysqli_query($conn,"select * from cse_attendence where date_created = '$date'");
}

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        body {
            background-image: url("l.webp");
            background-size: cover;
            background-repeat: no-repeat;
            color:purple;
        }

        a:link {
            text-decoration: none;
        }

        img {
            border-radius: 6%;
        }
    </style>
    <link rel="stylesheet" href="Attendence.css" />

</head>

<body>
    <div>
        <center>

            


                <h2>CSE Attendance</h2>            
            </h1>
            
                <legend>Select Date</legend><br>
                <form action="cse_view_attendence.php" method="post">
                    <center>
                        <label for="">Select Date:</label>
                        <input type="date" name="date" id="date" required>
                        <br><br><br>
                        <button type="submit" name="submit">Submit</button>
                        <button type="reset">Reset</button>
                    </center>
                </form>
            </fieldset>
            <br><br>
            <table class="table">
            <thead>
                <th name="sname">Name</th>
                <th name="rollno">Roll No.</th>
                <th name="email">Email ID</th>
                <th name="">Date</th>
                <th name="">Attendance Status</th>

            </thead>
            <tbody>
                <?php
                    while($fetch = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $fetch['name'];?></td>
                    <td><?php echo $fetch['roll_no'];?></td>
                    <td><?php echo $fetch['email'];?></td>
                    <td><?php echo $fetch['date_created'];?></td>
                    <td><?php 
                        if($fetch['status']=='present')
                        {
                            echo"<h3 style='color:green'>Present</h3>";
                        }
                        else
                        {
                            echo"<h3 style='color:red'>Absent</h3>";

                        }
                    ?></td>
                    <?php
    
                        if($fetch['status']=='absent')
                        {
                         
                            $to = $fetch['email'];
			        	$subject = 'Fine for being absent';
                        $message = 'Dear ' . $fetch['name'] . ',<br><br>You have been fined for being absent on ' . $date . '.
                        <html>
                            <head>
                            <title>HTML email</title>
                            </head>
                            <body>
                        
                            <center>
                            <a href="https://ibb.co/D7q7wxk"><img src="https://i.ibb.co/D7q7wxk/IMG-20230514-WA0001.jpg" alt="IMG-20230514-WA0001" border="0"></a></center>
                            </body>
                        </html>
                        <br><br>Regards,<br>Your Class Teacher <br>';
			        	$headers = 'From: ushashriannam@gmail.com' . "\r\n" .
						    'Reply-To: '.$to. "\r\n" .
						    'Content-Type: text/html; charset=UTF-8' . "\r\n" .
						    'X-Mailer: PHP/' . phpversion();

						if(mail($to, $subject, $message, $headers))
                        {
                            echo "<script>alert('Mail  Send')</script>";
                        }
			        }
                    else {
                        echo "<script>alert('Mail not Send')</script>";
			        }
                    ?>
                </tr>
               <?php  }?>
            </tbody>
        </table>

        </center>
    </div>
    <?php 
    // echo "<script>alert('Mail Sent to Absent Students')</script>";
?>
</body>
</html>