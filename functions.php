<?php 
function redirect_to($new_location) {
	  header("Location: " . $new_location);
	  exit;
	}
function create_user($username,$password){
  global $connection;
  $query="INSERT INTO users ";
  $query.="(username, hashed_password) ";
  $query.="VALUES ('{$username}', '{$password}')";
  $result=mysqli_query($connection,$query);
}

function login($username,$password){
  global $connection;
  $query="SELECT * FROM users ";
  $query.="WHERE username='{$username}' ";
  $result=mysqli_query($connection,$query);
  if($result_list=mysqli_fetch_assoc($result)){
    if($result_list["hashed_password"]==$password){
      $SESSION['user']=$result_list;
      redirect_to("index.html");
    }else{
      $SESSION["message"]="User password doesn't match.";
    }
    }else{
    $SESSION['message']="User not found.";
  }
 
}
function find_rides($number){
  global $connection;
  $query="SELECT * FROM requests ";
  $query.="LEFT JOIN requests_users ON requests.id=requests_users.request_id LEFT JOIN users ON users.id=requests_users.user_id ";

  $query.="ORDER BY requests.time ";
  $query.="LIMIT {$number}";
  $result= mysqli_query($connection,$query);
  return $query;
}
function filter_rides($number, $start, $destination, $time, $pass_num){
  global $connection;

}
?>
