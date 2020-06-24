<?php
session_start();
    include './includs/hedder.php';
    
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
        <br><br><br><br>
        <a href="./done.php">
            <button class="btn  btn-info float-left">Back</button>
        </a>
        <a href="./includs/logout.php">
            <button type="button" class="btn btn-info float-right">Logout</button>
        </a><br>
        <br>
        <?php
            include './includs/conn.php';
            $query = "SELECT * FROM studentsub WHERE sno = '".$_SESSION['sno']."' and sem='".$_SESSION['sem']."'";
            $result = mysqli_query($conn,$query);
            $show = "";
            while($row = mysqli_fetch_assoc($result)) {
                $query1 = "SELECT * FROM subject WHERE sbno = '".$row['sbno']."'";
                $result1 = mysqli_query($conn,$query1);
                //another query
                $query2 = "SELECT * FROM attendence WHERE sno = '".$_SESSION['sno']."' AND sbno='".$row["sbno"]."' and sem='".$_SESSION['sem']."'";
                $result2 = mysqli_query($conn,$query2);
                $noc = 0;
                while($oki = mysqli_fetch_assoc($result2)){
                    $noc = $noc+1;
                }
                
                
                while($ok = mysqli_fetch_assoc($result1)){
                    if ($ok["nc"]==0) {
                        $p=0;
                    }else{
                        $p = (int)$noc/(int)$ok["nc"]*100;
                    }
                
                $show= $show.'<div class="card text-white bg-primary wow flipInX">
            <h5 class="card-header">'.$ok['name'].'</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">total</h5>
                        <h4>'.$ok["nc"].'</h4>
                    </div>
                    <div class="col">
                        <h5 class="card-title">attended</h5>
                        <h4>'.$noc.'</h4>
                    </div>
                    <div class="col">
                        <h5 class="card-title">Persent</h5>
                        <h4>'.$p.'%</h4>
                    </div>
                </div>
                </div>
        </div> <br> <br>';
                $noc = 0;
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