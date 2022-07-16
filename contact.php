<?php if($_SERVER['REQUEST_METHOD']=='POST') {
    $name =$_POST['name'];
    $email =$_POST['email'];
    $msg =$_POST['msg'];
    $servername ='localhost:3307';
    $username='root';
    $password='';
    $database ='portfolio';
    $conn =mysqli_connect($servername, $username, $password, $database);
    $sql ="INSERT INTO `contact` (`name`, `email`, `message`, `date-time`) VALUES ('$name', '$email', '$msg', current_timestamp());";
    $result =mysqli_query($conn, $sql);

    if($result) {
        echo "<p id='success'>Response Submitted Successfully</p><a href='index.html'>Go Back</a>";

    }

    else {
        echo "<p id='error'>Error!!Please come again after some time..</p><a href='index.html'>Go Back</a>";
    }
}

?><style>@import url('https://fonts.googleapis.com/css2?family=PT+Sans&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'PT Sans', sans-serif;
}

p {
    font-size: 20px;
    font-weight: bold;
    color: black;
    text-align: center;
    margin: 0;
    padding: 10px;
}

#success {
    background: #00ff00;
}

#error {
    background: red;
}

a {
    text-decoration: none;
    padding: 10px 30px;
    background: #00ff9d;
    color: black;
    font-size: 20px;
    display: block;
    width: fit-content;
    margin: 20px auto;
    border-radius: 30px;
    transition: 0.6s;
    font-weight: bold;
}

a:hover {
    background-color: black;
    color: #00ff00;
}

</style>