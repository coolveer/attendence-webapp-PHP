<?php
    include './includs/hedder.php';
    session_start();
    
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
    <br><br><br><br>
    <a href="./ssub.php">
    <button class="btn  btn-info float-left">Back</button>
    </a>
    <a href="./includs/logout.php">
        <button type="button" class="btn btn-info float-right">Logout</button>
    </a><br>
    <br>
    <h1 class="text-center" style="font-family: 'Lobster', cursive;">Select Student & Add Remarks</h1> <br><br>
    <form action="./includs/addremarks.php" method="POST" class="form-group">
            <select id="sep" name="sno" class="form-control" >
                <?php
            include './includs/conn.php';
            $query = "SELECT * FROM studentsub WHERE sbno = '".$_GET['sub']."' and sem = '".$_GET['sem']."'";
            $result = mysqli_query($conn,$query);
            $show = "";
            while($row = mysqli_fetch_assoc($result)) {
                $query1 = "SELECT * FROM student WHERE sno = '".$row['sno']."'";
                $result1 = mysqli_query($conn,$query1);
                
                
                while($ok = mysqli_fetch_assoc($result1)){
                $show= $show.'<option value="'.$ok["sno"].'">'.$ok["name"].'</option>';
                }
                
            }
            echo $show;
            ?>
			</select> <br><br>
            <input type="text" name="sem" class="d-none" value="<?php echo $_GET['sem']  ?>">
            <input type="text" name="marks" placeholder="Students remarks here" class="form-control">
            <input type="text" name="sub" value="<?php echo $_GET['sub']   ?>"class="d-none">

            <br><br>
            <button type="submit" class="bn btn-info btn-block btn-lg">Add Remarks </button>
    </form>    
    </div>
    <div class="col"></div>
</div>
<?php

if(isset($_GET['app'])) {
    echo "<p style='color:red' class='text-center'> remarks has been successfully added </p>";
}else{
    echo "";
}

?>


<?php
	include './includs/footer.php';
?>