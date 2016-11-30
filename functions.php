<?php 
function create_user($username,$password){
  $query="INSERT INTO users ";
  $query.="(username, hashed_password) ";
  $query.="VALUES ('{$username}', '{$password}')";
  $result=mysqli_query($connection,$query);
}

function login($username,$password){
  $query="SELECT * FROM users ";
  $query.="WHERE username='{$username}' ";
  $result=mysqli_query($connection,$query);
  if($result_list=mysqli_fetch_assoc($result)){
    if($result_list["hashed_password"]==$password){
      $SESSION['user']=$result_list
      redirect_to("index.html")
    }else{
      $SESSION["message"]="User password doesn't match."
    }
    }else{
    $SESSION['message']="User not found."
  }
 
}
function find_rides($number){

}
function filter_rides($number, $start, $destination, $time, $pass_num){

}
?>
