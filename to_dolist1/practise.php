<?php
    $input=$_GET['input'];
    $edit=$_GET['edit'];
    $delete=$_GET['delete'];
    $display=$_GET['display'];
    $button=$_GET['submit'];
    $desiredinput=$_GET['desiredinput'];
    $conn=mysqli_connect("localhost","root","","test");
    if($conn==true)
    {
        echo "Connection Established";
        echo "<br>";
        if($button=="submit")
        {
            $insert_query=mysqli_query($conn,"INSERT INTO `todo`(`task`) VALUES ('$input');");
            if($insert_query==true)
            {
                echo "Query Inserted Successfully";
            }
            else
            {
                echo "Not Inserted";
            }
        }
        elseif ($button=="edit") 
        {
            $edit_query=mysqli_query($conn,"UPDATE `todo` SET `task`='$desiredinput' WHERE id='$edit';");
            if($edit_query==true)
            {
                echo "Entry Edited Successfully";
            }
            else
            {
                echo "Not Edited";
            }
        }
        elseif ($button=="delete") 
        {
            $delete_query=mysqli_query($conn,"DELETE FROM `todo` WHERE `id`='$delete';");
            if($delete_query==true)
            {
                echo "Entry Deleted Successfully";
            }
            else
            {
                echo "Not Deleted";
            }
        }
        elseif ($button=="display")
        {
            $display_query=mysqli_query($conn,"SELECT * FROM `todo` WHERE `id`='$display';");
            if($display_query==true)
            {
                while($row=mysqli_fetch_assoc($display_query))
		        {
			        echo "ID:".$row["id"]."email:".$row["task"]."<br>";
		        }
            }
        }
    }
?>
