<?php

require("creds.php");
class Common
{

    public function getAllRecords($conn) {
        $query = "SELECT * FROM outreach_form";
        $result = $conn->query($query) or die("Error in query1".$conn->error);
        return $result;
    }

    public function deleteRecordById($conn,$recordId) {
        $imageQuery = "SELECT `Attachments` FROM `outreach_form` WHERE id='$recordId'";
        $imagePath = $conn->query($imageQuery) or die("Error in query2".$conn->error);
        $path = mysqli_fetch_array($imagePath);
        unlink("/home/dotcomgr/public_html/$path[0]");
        $query = "DELETE FROM outreach_form WHERE id='$recordId'";
        $result = $conn->query($query) or die("Error in query3".$conn->error);
        return $result;
    }
}