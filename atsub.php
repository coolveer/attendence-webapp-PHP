<?php
    include './includs/hedder.php';
    session_start();
    
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
    <br><br><br><br>
    <a href="./tview.php">
    <button class="btn  btn-info float-left">Back</button>
    </a>
    <a href="./includs/logout.php">
        <button type="button" class="btn btn-info float-right">Logout</button>
    </a><br>
    <br>
    <h1 class="text-center" style="font-family: 'Lobster', cursive;">Select Subject</h1> <br><br>
    <form action="./addattendence.php" method="GET" class="form-group">
            <select id="sep" name="sub" class="form-control" >
                <?php
            include './includs/conn.php';
            $query = "SELECT * FROM teachersub WHERE tno = '".$_SESSION['tno']."'";
            $result = mysqli_query($conn,$query);
            $show = "";
            while($row = mysqli_fetch_assoc($result)) {
                $query1 = "SELECT * FROM subject WHERE sbno = '".$row['sbno']."'";
                $result1 = mysqli_query($conn,$query1);
                
                
                while($ok = mysqli_fetch_assoc($result1)){
                $show= $show.'<option value="'.$ok["sbno"].'">'.$ok["name"].'</option>';
                }
                
            }
            echo $show;
        ?>
			</select><br><br>
            <select name="sem" class="form-control" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>  
            <br><br>
        <input type="submit" class="btn btn-info btn-lg btn-block" value="submit">
    </form>    
    </div>
    <div class="col"></div>
</div>



<?php
	include './includs/footer.php';
?>