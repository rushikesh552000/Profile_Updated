<?php
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $msg = $_POST['Message'];

    $conn = mysqli_connect('localhost', 'root', '', 'test');

    
    $sql = "insert into register(name,email,subject,msg) values('$name', '$email' , '$subject' ,'$msg')";
    $rs = mysqli_query($conn,$sql);
    if($rs)
    {
        echo"register successful";
    }
    
    
    ?>