<?php
class USER
{
    private $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
 
    public function register($fname,$lname,$enumber,$umail,$upass)
    {
       try
       {
           $new_password = password_hash($upass, PASSWORD_DEFAULT);
   
           $stmt = $this->db->prepare("INSERT INTO tblUsers(employeeNumber,workEmail,pass,fName,lName) 
                                                       VALUES(:enumber, :umail, :upass, :fname, :lname)");
              
           $stmt->bindparam(":enumber", $enumber);
           $stmt->bindparam(":umail", $umail);
           $stmt->bindparam(":upass", $new_password);
           $stmt->bindparam(":fname", $fname);
           $stmt->bindparam(":lname", $lname); 
           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
    public function login($enumber,$umail,$upass)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM tblUsers WHERE employeeNumber=:enumber OR workEmail=:umail LIMIT 1");
          $stmt->execute(array(':enumber'=>$enumber, ':umail'=>$umail));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($upass, $userRow['pass']))
             {
                $_SESSION['user_session'] = $userRow['employeeNumber'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }
}
?>
