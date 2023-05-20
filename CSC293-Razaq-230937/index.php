<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
<!-- JavaScript  -->
    <script src="script.js" type="text/javascript"></script>

<!-- CSS styling -->
    <link rel="stylesheet" href="./Style.css">
    
    <!-- Styling starts here -->
    <style>
        img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 15%;
            margin-left: 200px;
            margin-bottom: 20px;
        }
        #myform select{
            height: 25px;
            width: 150px;
            text-indent: 0;
            outline: 0;
            border: 0;
        }

    #form .submit{
    color: black;
    font-size: medium;
    background-color: rgb(255, 255, 255);
    width: 100px;
    height: 38px;
    font-weight: bold;
    outline: 3px;
    border: 1px;
    margin-left: 600px;
    margin-bottom: 20px;
}

fieldset{
width: 500px;
display: auto;
 margin-left: 167px;   
text-decoration-color: aliceblue;
border: 2px;
border-color: rgb(42, 165, 165);
}


    </style>
    <!-- styling ends here -->
</head>
<body>
    <div class="container">
        <div class="login-form">
            <form action="viewinfo.php" method="post" id="form">
             <!-- View saved data -->
             <input type="submit" value="User Data" class="submit"/>


            <!-- Registration Form -->
        </form>
            <form action="process.php" method="post" id="myform" name="myform">
                <img src="./self.jpeg" alt="#">


                <div class="form-div">
                    <label for="name">Name: </label>
                     <input type="text" id ="name" name="name" placeholder=" your name">
                </div>
                <div class="form-div">
                    <label for="Email">Email: </label>
                    <input type="email" id = "email" name="email" placeholder=" your email">
                </div>
                <div class="form-div">
                    <label for="password">Password: </label>
                    <input type="password" name="password"id="password">
                </div>
                <div class="form-div">
                    <label for="phoneno">Phone Number: </label>
                    <input type="number" name="phonenumber" id ="phoneno">
                </div>
                <div class="form-div">
                   <strong for="">Gender: </stromg>
                    <fieldset><legend><div>
                        <label>Male:</label>
                        <input type="radio" name="gender" value="male" >
                        <label>Female: </label>
                        <input type="radio" name="gender" id="" value="female" >
                        <label>Other: </label>
                        <input type="radio" name="gender" id="" value="others">
                    </div></legend> </fieldset>   
                </div>
                <!-- Felching languages from database -->
                <div class="form-div">
                    <label for="language">Language </label>
                    <?php 
                    $con = mysqli_connect("localhost","root","","forminfo");
                    $s = mysqli_query($con, "select * from Language")
                    ?>
                    <select name="language" id="form-div2">
                        <?php
                        while($r=mysqli_fetch_array($s))
                        {
                        ?>
                       <!--  <option>Select Language</option> -->
                        <option value="<?php echo $r['language'];?>"><?php echo $r['language'];?></option>
                        <?php 
                        }?>
                    </select>
                </div>
               <div class="form-div">
                <label for="">Zip Code: </label>
                <input type="text" name="zipcode" id="">
               </div>
                <div class="form-div">
                    <label for="">About: </label>
                    <textarea name="about" id="" cols="30" rows="2">Write about yourself...</textarea>
                </div>
                <button class="sumbit" onclick="return validateform()">Register</button>
            </form>
            </div>
    </div>
</body>
</html>