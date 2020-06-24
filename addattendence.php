<?php
    include './includs/hedder.php';
    session_start();
    
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
    <br><br><br><br>
    <a href="./atsub.php">
    <button class="btn  btn-info float-left">Back</button>
    </a>
    <a href="./includs/logout.php">
        <button type="button" class="btn btn-info float-right">Logout</button>
    </a><br>
    <br>
    <h1 class="text-center" style="font-family: 'Lobster', cursive;">Select Student & Add Marks</h1> <br><br>
    <?php

if(isset($_GET['app'])) {
    echo '<hr> <h4 class="text-danger text-center">'.$_GET['app']." has been marked as present</h4> <hr>";
}else{
    echo "";
}

?> 
    <form method="post" action="./includs/addattendence.php">
                
            <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  
                  <th scope="col">Roll No</th>
                  <th scope="col">Preasent</th>
                </tr>
              </thead>
              <tbody>
                <?php
            include './includs/conn.php';
            $query = "SELECT * FROM studentsub WHERE sbno = '".$_GET['sub']."' and sem = '".$_GET['sem']."' ORDER BY rno ASC";
            $result = mysqli_query($conn,$query);
            $show = "";
            while($row = mysqli_fetch_assoc($result)) {
                $query1 = "SELECT * FROM student WHERE sno = '".$row['sno']."' ";
                $result1 = mysqli_query($conn,$query1);
                
                
                while($ok = mysqli_fetch_assoc($result1)){
                $show= $show.'<tr>
                  <th scope="row">'.$ok["name"].'</th>
                  
                  <td>'.$ok["rno"].'</td>
                  <td><input type="checkbox" id="vehicle1" name="sno[]" value="'.$ok["sno"].'"></td>
                </tr>';
                }
                
            }
            echo $show;
            ?>
            
                
              </tbody>
            </table>
            <input type="text" name="sub" class="d-none" value="<?php echo $_GET['sub'] ?>">
            <input type="text" name="sem" class="d-none" value="<?php echo $_GET['sem'] ?>">
            <button type="submit" class="btn btn-lg btn-block btn-dark">Done</button>
	</form>	    
           
            
<br><br><br><br><br><br><br>
    
    </div>
    <div class="col"></div>
</div>



<?php
	include './includs/footer.php';
?>