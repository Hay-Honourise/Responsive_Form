<?php
    $conn = mysqli_connect("localhost", "root", "", "forminfo");
    $result= mysqli_query($conn, "select * from registerform") 
    ?> 
    <!DOCTYPE html> 
    <html> 
        <head> 
            <title> Fetch Data From Database </title> 
        </head> 
        <body> 
        <table align="center" border="1px" style="width:1000px; line-height:30px;"> 
        <tr> 
            <th colspan="9"><h1>User Information</h1></th> 
            </tr> 
                <th> ID </th> 
                <th> Name </th> 
                <th> Email </th> 
                <th> Password </th> 
                <th> Phone Number </th> 
                <th> Gender </th> 
                <th> Language </th> 
                <th> Zipcode </th> 
                <th> About </th> 
            </tr> 
            
            <?php while($rows=mysqli_fetch_assoc($result)) 
            { 
            ?> 
            <tr>
            <td><?php echo $rows['id']; ?></td> 
            <td><?php echo $rows['name']; ?></td> 
            <td><?php echo $rows['email']; ?></td> 
            <td><?php echo $rows['password']; ?></td>
            <td><?php echo $rows['phone']; ?></td> 
            <td><?php echo $rows['gender']; ?></td>  
            <td><?php echo $rows['language']; ?></td> 
            <td><?php echo $rows['zipcode']; ?></td> 
            <td><?php echo $rows['about']; ?></td> 
            </tr> 
            <?php 
                } 
            ?> 

        </table> 
        </body> 
    </html>
