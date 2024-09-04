<?php

include_once "head.php";
?>
<?php
if(isset($_REQUEST['edit'])){
echo "

<script>

document.getElementById('myModal').style.display = 'block';

</script>

";



}





if(isset($_REQUEST['btn'])){



  $e= $_REQUEST['email'];
  $p= $_REQUEST['password'];
  $p= md5($p);
  $r= $_REQUEST['role'];
  $c= $_REQUEST['company'];
  $s= $_REQUEST['status'];
  
  //insert
  
  $sql = "INSERT INTO user ( email, password,role,company,status) VALUES ('$e', '$p', '$r', '$c', '$s')  ON DUPLICATE KEY UPDATE password = '$p',role = '$r',company = '$c',status = '$s'";
  $r = mysqli_query($conn,$sql);
  
  if ($r) {
      echo "
      
      <script>
  alert('Saved');
  window.location.replace('".basename($_SERVER['PHP_SELF'])."');
  
      </script>
      
      
      
      ";
  
  
  } else{
  
    echo "
      
    <script>
  alert('Failed');
  window.location.replace('".basename($_SERVER['PHP_SELF'])."');
    </script>
    
    
    
    ";

    die();
  }
  


}



?>

<style>
/* The Modal (background) */
.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1000000;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    top: 0;
    width: 100%;
    /* Full width */
    margin: auto;
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 70%;
}



/* The Close Button */
.close2 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close2:hover,
.close2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>



<div class="container-fluid">




    <div class="row mt-4 d-print-none">
        <div class="col-xl-10  col-12">
            <div class=" mb-4">
                <h1 class="">User</h1>

            </div>
        </div>
        <div class="col-xl-2  col-12">



            <button id="myBtn" class=" btn btn-success float-end d-print-none">+ Add New</button>



        </div>

    </div>


    <?php
if(isset($_REQUEST['edit'])){




}?>

    <!-- The Modal -->
    <div id="myModal" class="modal d-print-none">

        <!-- Modal content -->
        <div class="modal-content">
            <div>
                <p class="close2">X</p>
            </div>
            <div class="container">
                <form method="post">
                    <div class="row mt-4">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input name="email" maxlength="30" id="email" class="form-control" type="email" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input name="password" maxlength="30" id="password" class="form-control" type="password"
                                required>
                        </div>


                        <div class="form-group col-md-3">
                            <label for="role">Role</label>
                            <select class="form-control" name="role" id="role" required>
                                <option>admin</option>
                                <option>hr</option>


                            </select>
                        </div>



                        <div class="form-group col-md-3">
                            <label for="company">Company</label>
                            <input type="text" maxlength="10" class="form-control" name="company" id="company" required>

                        </div>


                        <div class="form-group col-md-3">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="0">Active</option>
                                <option value="1">Block</option>


                                <?php
if(isset($_REQUEST['edit'])){




}?>

                            </select>
                        </div>


                        <div class="form-group col-md-3">

                            <input name="btn" class="btn btn-success float-end m-4" type="submit">
                        </div>


                    </div>






                </form>
            </div>
        </div>

    </div>
    <?php
if(isset($_REQUEST['edit'])){
echo "

<script>

document.getElementById('myModal').style.display = 'block';

</script>

";



}?>
    <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close2")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>




    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            User List : 
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th class="d-print-none">Action</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Company</th>
                        <th>Status</th>
                        <th>Entry</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="d-print-none">Action</th>

                        <th>Email</th>
                        <th>Role</th>
                        <th>Company</th>
                        <th>Status</th>
                        <th>Entry</th>

                    </tr>
                </tfoot>
                <tbody>

                    <?php
$sql = "SELECT email, role, company, status,reg_date FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr >

                        <td class='d-print-none'><a href='".basename($_SERVER['PHP_SELF'])."?edit=". $row["email"]."'><i class='fas fa-edit'></i></a> <a href='".basename($_SERVER['PHP_SELF'])."?dea=". $row["email"]."'><i style='margin-left:20px;' class='fas fa-ban'></i></a> <a href='".basename($_SERVER['PHP_SELF'])."?del=". $row["email"]."'><i style='margin-left:20px;'
                                    class='fas fa-trash'></i></a></td>
                    
                        <td>". $row["email"]. "</td>
                        <td>". $row["role"]. "</td>
                        <td>" . $row["company"] ."</td>
                        <td>" . $row["status"] . "</td>
                        <td>" . $row["reg_date"] . "</td>

                    </tr>";
        
        
        
        
      //  <br> id: ". $row["email"]. " - Name: ". $row["role"]. " " . $row["company"] ." " . $row["status"] . "<br>";
    }
} else {
    echo "0 results";
}
?>




                </tbody>
            </table>
        </div>
    </div>
</div>



<?php

include_once "foot.php";
?>