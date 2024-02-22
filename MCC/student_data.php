<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'Student Project_1';

$conn = mysqli_connect($serverName, $userName, $password, $databaseName);



if($_SERVER['REQUEST_METHOD']=='POST') 
{
    $NAME = $_POST['name'];
    $ROLL = $_POST['roll'];
    $SEC = $_POST['sec'];
    $upFile = $_POST['upFile'];

    if (!$conn)
    {
        die("Connection failed" . mysqli_connect_error($conn));
    }

    $sql = "INSERT INTO `students`(`Name`, `Roll NO`, `Section`, `Uploaded File`) VALUES ('$NAME',' $ROLL','$SEC','$upFile')";

    $result = mysqli_query($conn, $sql);
if($result)
    {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Hello '.$NAME.' Your data has been submitted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    }
    else 
{
    echo "Sorry!! cann't submit your data<br>....>".mysqli_error($conn);
}
}

?>