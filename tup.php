<?php
	include './includs/hedder.php';
?>

    <br><br><br><br>
    <a href="./index.html">
    <button class="btn  btn-info ">Back</button>
    </a>
    <br>
    <br>
    <div class="container">
    <h1 class="text-center" style="font-family: 'Lobster', cursive;">Teacher Signup</h1>
        <form action="./includs/tup.php" method="post">
            <?php 
                    if(isset($_GET['req'])) {
                        echo "<hr> <p style='color:red'>you will be able to login when admin approves your Request</p> <hr>";
                    }else{
                        echo "";
                    }

                ?>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="name" required> <br>
                <input type="text" class="form-control" name="dpt" placeholder="Department" required> <br>
                <input type="number" class="form-control" name="mno" placeholder="Mobile Number" required> <br>
                <input type="email" class="form-control" name="email" placeholder="Email" required> <br>
                <?php 
                    if(isset($_GET['email'])) {
                        echo "<p style='color:red'> email already taken </p>";
                    }else{
                        echo "";
                    }

                ?>
                <input type="password" class="form-control" name="pwd" placeholder="Passowrd" required> <br>
                <?php 
                    if(isset($_GET['pwd'])) {
                        echo "<p style='color:red'> password not match </p>";
                    }else{
                        echo "";
                    }

                ?>
                <input type="password" class="form-control" name="pwd1" placeholder="Confirm Passowrd" required> <br>
                <button type="submit" name="signup" class="btn btn-success btn-block">Request Confirmation</button>	<br><br>
            </div>
        </form>
    </div>
<?php
	include './includs/footer.php';
?>