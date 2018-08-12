<?php
/*
 */
$time_pre = microtime(true);
sleep(1);
$upload_dir = "excels/";
if ( isset($_FILES["excelFile"]) ) { // it is recommended to check file type and size here
    if ($_FILES["excelFile"]["error"] > 0) {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    } else {
        move_uploaded_file($_FILES["excelFile"]["tmp_name"], $upload_dir . $_FILES["excelFile"]["name"]);
        echo $_FILES["excelFile"]["name"];
    }
}
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
//echo $exec_time;

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
?>