<?php
    include './includs/hedder.php';
    session_start();
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
    <br><br><br><br>
    <a href="./index.php">
    <button class="btn  btn-info float-left">Back</button>
    </a>
    <a href="./includs/logout.php">
        <button type="button" class="btn btn-info float-right">Logout</button>
    </a><br>
    <br>
    <h1 class="text-center wow backInUp" style="font-family: 'Lobster', cursive;">Welcome to the Teacher's section:</h1>
    <?php 
    if(isset($_GET['done'])) {
        echo "<hr><p style='color:#fff;' class='text-center bg-dark'> <b>Attendence has been marked successfully</b> </p><hr>";
    }else{
        echo "";
    }

?> <br><br>
        <a href="./rsub.php">
            <button class="btn btn-lg btn-info btn-block wow backInLeft"><h3>Reserve Subject </h3></button><br><br><br>
        </a>
        <a href="./atsub.php">
            <button class="btn btn-lg btn-info btn-block wow backInRight"><h3>Add Attendence</h3></button><br><br><br>
        </a>
        
        <a href="./csub.php">
        <button class="btn btn-lg btn-info btn-block wow backInLeft"><h3>Create Subject</h3></button><br><br><br>
        </a>

        <a href="./selectsub.php">
            <button class="btn btn-lg btn-info btn-block wow backInRight"><h3>Add Marks </h3></button><br><br><br>
        </a>
        <a href="./tsubs.php">
            <button class="btn btn-lg btn-info btn-block wow backInLeft"><h3>Your Subjects</h3></button><br><br><br>
        </a>
        <a href="./ssub.php">
            <button class="btn btn-lg btn-info btn-block wow backInRight"><h3>Add Remarks</h3></button><br><br><br>
        </a>
        
    </div>
    <div class="col"></div>
</div>




<?php
	include './includs/footer.php';
?>