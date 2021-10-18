<?php
    require("db.php");

    function getUsersData($user)
    {
        $array = array();
        $query = mysql_query("SELECT * FROM `admin` WHERE`ADM_ID` =".$user);
        
        while($row = mysql_fetch_assoc($query))
        {
            $array['ADM_ID']=$row['ADM_ID'];
            $array['ADM_NAME']=$row['ADM_NAME'];
            $array['ADM_PHONE']=$row['ADM_PHONE'];
            $array['ADM_EMAIL']=$row['ADM_EMAIL'];
            $array['ADM_PASS']=$row['ADM_PASS'];
        }
        return $array;
    }
function getId($user)
{
    $query = mysql_query("SELECT `ADM_ID` FROM `admin` WHERE `ADM_ID` = '".$user."'");
    while($row = mysql_fetch_assoc($query))
    {
        return $row['ADM_ID'];
    }
}
        
?>