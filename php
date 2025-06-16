
<?php
include 'project.html';

if(isset($_POST['submit'])){
$n=$_POST['name'];
$o=$_POST['email'];
$p=$_POST['pswd'];
$q=$_POST['confirmpassword'];
$con=mysqli_connect("localhost","root","Mukesh@100999","english");
$sql="INSERT INTO customers(customer_name,customer_email,customer_password,confirm_password) values('$n','$o','$p','$q')";
$r=mysqli_query($con,$sql);

if($r){
    ?>
    <script>
   Swal.fire({
      title: "Registered Successfully!",
      titlecolor: "#3cb371",
      icon: "success",
      draggable: true
});
    </script>
<?php
}
else{
    ?>
    <script>
   Swal.fire({
      title: "Oops..",
      text: "Something went wrong",
      textcolor: "#3cb371",
      icon: "error",
});
    </script>
<?php
}
}
?>
