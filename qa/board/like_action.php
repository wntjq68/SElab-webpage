<?php
session_start();

$connect = mysqli_connect("localhost", "webapp", "webapp", "webapp", "3306") or die("fail");

$value = $_POST['like'];
$b_no = $_SESSION['b_no'];
$id = $_SESSION['id'];

$query = "select * from board_free where b_no='$b_no'";
$result = $connect->query($query);
if (mysqli_num_rows($result)==1) {
    $row = mysqli_fetch_assoc($result);
}


$likes = $row['likes'] ;
$unlikes = $row['unlikes'];

$query2 = "select * from like_list where id='$id' and b_no='$b_no' ";
$result2 = $connect->query($query2);
if (mysqli_num_rows($result2) == 1) {
    header("location: view.php?bno='$b_no'");
    exit;
}




    if($value == 1){
        // echo "<script>alert(\"$lid\");</script>";
        $likes = $likes +1;
        $query1 = "update board_free set likes = $likes where b_no='$b_no'";
        $result1 = $connect->query($query1);

        $query3 = 'INSERT INTO like_list(ID, b_no) values("'. $id .'" , "'.$b_no.'")';
        $result3 = $connect->query($query3);

    }
    else{
        $unlikes = $unlikes +1;
        $query1 = "update board_free set unlikes = '$unlikes' where b_no='$b_no'";
        $result1 = $connect->query($query1);

        $query3 = 'INSERT INTO like_list(ID, b_no) values("'. $id .'" , "'.$b_no.'")';
        $result3 = $connect->query($query3);
    }



header("location: view.php?bno='$b_no'");


?>
