<?php
    @session_start();
    include('connect.php');

    //if user is already logged in 
    if (isset($_SESSION['username'])){
        echo '<script language="javascript">alert(User is already logged in please logout first )</script>'; 
        header('refresh:5','location:detail.php');
    }
    
    //setting variable using post array
    $user = $_POST['username']; 
    $userid=$_POST['userid'];
    $password = $_POST['password'];
    
    
    //
    $query1="INSERT INTO `login_info`(`username`, `userid`, `password`) VALUES ('$user','$userid','$password');";

    $res1 = mysqli_query($conn, $query1);
    
    $query = "select * from login_info where username = '$user'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($res);


    if(mysqli_num_rows($res) > 0){

        if(strcmp($row['password'],$password)==0){
        //if the user exists then create seesion variables emailid and password
        $_SESSION['username']=$user;
        $_SESSION['password']=$password;
        $_SESSION['userid'] = $row['userid'];
       
        
        header('Location:newlogin.php');
    }
    // $_SESSION['username']=$user;
    // $_SESSION['password']=$password;
    // $_SESSION['email'] = $email;
    // $_SESSION['phone_no'] =$phone;
    //redirect to explore page
    //header('Location: explore.php');
}
    
?>