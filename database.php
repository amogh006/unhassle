<?php
//{{{{{{{{{{{{{{{{{search from database}}}}}}}}}}}}}
$search_value=$_POST["search"];
$con=new mysqli("localhost", "root", "", "hopeurl");
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from urli where code like '%$search_value%'";

        $res=$con->query($sql);

        while($row=$res->fetch_assoc()){
            echo 'url:  '.$row["url"];
            header('Location: '.$row["url"]);


            }       

        }
?>