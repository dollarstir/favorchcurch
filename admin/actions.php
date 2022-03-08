<?php 
include 'core.php';

if(isset($_GET['dollar'])){
    // adding activity

    if($_GET['dollar']=="aadevent"){
        
        include 'db.php';
        extract($_POST);
        $detail =mysqli_real_escape_string($conn,$detail);
        $title  =mysqli_real_escape_string($conn,$title);
        
        // $ref  =mysqli_real_escape_string($conn,$ref);
       
        if(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for Event   
            </div>';

        }
       
        else{
            $dd = (new DateTime($edate . " " . $etime))->format("Y-m-d H:i:s");

            addplayer($title,$venue,$dd,$detail,$venue);
        }
    }
// Deleting Activity
    if($_GET['dollar']=="deleteactivity"){

        $id = $_POST['id'];

       echo  $id;
    }
// Updating activity
    if($_GET['dollar']=="updateactivity"){

        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        $dd = date("jS F, Y");

        updateactivity($id,$title,$price,$desco,$oldpic,$dd);

    }


    // adding Testimony

    if($_GET['dollar']=="adtestimony"){
        
        include 'db.php';
        extract($_POST);
        $detail =mysqli_real_escape_string($conn,$detail);
        $name  =mysqli_real_escape_string($conn,$name);
        
        // $ref  =mysqli_real_escape_string($conn,$ref);
       
        if(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for person   
            </div>';

        }
       
        else{
            // $dd = (new DateTime($edate . " " . $etime))->format("Y-m-d H:i:s");

            addtestimony($name,$detail);
        }
    }


    // adding Sermon

    if($_GET['dollar']=="addsermon"){
        
        include 'db.php';
        extract($_POST);
        if (empty($title) &&  empty($madeby)) {
            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                service name and price cannot be empty
                </div>';
            # code...
        }
        elseif(empty($_FILES['image']['name']) || empty($_FILES['audio']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse audio or image for sermon   
            </div>';

        }
        else{
            $dd = date("Y-m-d H:i:s");

            addtourservice($title, $madeby, $dd);
        }
    }


    if($_GET['dollar']=="addtour"){
        
        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        if (empty($title) &&  empty($prie)) {
            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                service name and price cannot be empty
                </div>';
            # code...
        }
        elseif(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for service   
            </div>';

        }
        else{
            $dd = date("jS F, Y");

            addtourservice($title,$price,$desco,$dd);
        }
    }

// update tour
    if($_GET['dollar']=="updatetourserv"){

    include 'db.php';
    extract($_POST);
    $desco =mysqli_real_escape_string($conn,$description);
    $dd = date("jS F, Y");

    updatetour($id,$title,$price,$desco,$oldpic,$dd);

    }


    if($_GET['dollar']=="addacomo"){
        
        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        if (empty($title) &&  empty($prie)) {
            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                Accomodation name and price cannot be empty
                </div>';
            # code...
        }
        elseif(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for accomodation   
            </div>';

        }
        else{
            $dd = date("jS F, Y");

            addaccomodation($title,$price,$desco,$dd,$ltype);
        }
    }


    // updating accomodation

    if($_GET['dollar']=="updateaccserv"){

        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        $dd = date("jS F, Y");
    
        updateaccomodation($id,$title,$price,$desco,$oldpic,$dd,$ltype);
    
        }

        if($_GET['dollar']=="addlocation"){
        
            include 'db.php';
            extract($_POST);
            // $desco =mysqli_real_escape_string($conn,$description);
            if (empty($title)) {
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                    Location name  cannot be empty
                    </div>';
                # code...
            }
            elseif(empty($_FILES['image']['name'])){
    
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                browse image for Location   
                </div>';
    
            }
            else{
                $dd = date("jS F, Y");
    
                Addlocation($title);
            }
        }





        if($_GET['dollar']=="login"){
        
            include 'db.php';
            extract($_POST);
            // $desco =mysqli_real_escape_string($conn,$description);
            if (empty($email)) {
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                    enter email
                    </div>';
                # code...
            }
            elseif(empty($password)){
    
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                enter password   
                </div>';
    
            }
            else{
                // $dd = date("jS F, Y");
    
                Adminlogin($email,$password);
            }
        }


}

?>