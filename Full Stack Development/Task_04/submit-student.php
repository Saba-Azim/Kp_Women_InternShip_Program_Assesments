<?php
    //To check the submission status of form
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //Database Connection
        $server_name = "localhost";
        $username = "root";
        $Password = "";
        $db_name = "tenagon";
        
        //Create Connection
        $conn = mysqli_connect($server_name, $username, $Password, $db_name);
        
        //Checking the Connection
        if (!$conn) {
            die("Connection Failed");
        }
        
        //Getting Form Data
        $name = $_POST['name'];
        $gender= $_POST['gender'];
        $dob= $_POST['dob'];
        $phone= $_POST['phone'];
        $address= $_POST['address'];

        //Using Insert (SQL) Command to insert data into our database table
        $sql = "INSERT INTO student (name, gender, date_of_birth, phone, address) VALUES ('$name', '$gender', '$dob', '$phone', '$address')";
        
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Student Added');</script>";
            echo "<script>window.location.href='student.php'</script> ";
            exit();
        } else {
            echo "<script>alert('Data Insertion Failed');</script> ";
        }
        
        mysqli_close($conn);
    }
?>
