<?php
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $msg = $_POST['Message'];


    $server = "	sql311.epizy.com";
    $username="epiz_27596700";
    $password = "7z2pdslSGvR2MXe";
    $dbname = "epiz_27596700_rushikesh";

    $conn = new mysqli($server, $username, $password, $dbname);

    if(mysqli_connect_error())
    {
        die('Connection Failed : '.mysqli_connect_error());
    }
    else{

        $select = "select email from contact where email = ? limit 1 ";
        $insert = "insert into contact(name,email,subject,msg) values(?,?,?,?)";
        $stmt = $conn->prepare($select);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0)
        {
            $stmt->close();
            $stmt = $conn->prepare($insert);
            $stmt->bind_param("ssss", $name, $email, $subject, $msg);
            $stmt->execute();

            echo"Registration Successfully....";

        }
        else{
            echo"Email already exists!!!";
        }
        $stmt->close();
        $conn->close();
    }


?>