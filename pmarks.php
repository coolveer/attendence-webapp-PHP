<?php
    include './includs/hedder.php';
    session_start();
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
        <br><br><br><br>
        <a href="./pview.php">
            <button class="btn  btn-info float-left">Back</button>
        </a>
        <a href="./includs/logout.php">
            <button type="button" class="btn btn-info float-right">Logout</button>
        </a><br>
        <br>
        <?php
            include './includs/conn.php';
            $query = "SELECT * FROM marks WHERE sno = '".$_SESSION['sno']."'";
            $result = mysqli_query($conn,$query);
            $show = "";
            while($row = mysqli_fetch_assoc($result)) {
                $query1 = "SELECT * FROM subject WHERE sbno = '".$row['sbno']."'";
                $result1 = mysqli_query($conn,$query1);
                
                
                while($ok = mysqli_fetch_assoc($result1)){
                $show= $show.'<hr><h3 class="text-center bg-info text-white">'.$ok['name'].'=== '.$row["marks"].'    <h3><hr>';
                }
                
            }
            echo $show;
        ?>
        
    </div>
    <div class="col"></div>
</div>




<?php
	include './includs/footer.php';
?>