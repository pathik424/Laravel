<?php
session_start();

require_once("model/model.php"); // model file attached kari //

class controller extends model
// model.php connect karayu //
{

    public $baseurl = "http://localhost/Laravel/Laravel/php/assets/"; // url banavi ne php ni darek file ma jaine 

    public $adminurl = "http://localhost/Laravel/Laravel/php/assets/admin/"; // url banavi ne php ni darek file ma jaine for admin file



    public function __construct()
    {

        parent::__construct(); // jo be construct hoy biji file ma to a lakhvu je pehla first batavu hoy to//


        if (isset($_SERVER['PATH_INFO'])) {

            // echo "<pre>";
            // print_r($_SERVER);
            // echo "</pre>";
            switch (($_SERVER['PATH_INFO'])) {


                case '/home': //page connection//

                    // $users = $this->selectwhere("pet_registration", 1);
                    //    echo "<pre>";
                    //     print_r($users);
                    //     echo "</pre>";

                    $products = $this->select('product');


                    require_once("view/header.php");
                    require_once("view/home.php");
                    require_once("view/footer.php");
                    break;

                case '/about': //page connection//

            
                    require_once("view/header.php");
                    require_once("view/about.php");
                    require_once("view/footer.php");
                    break;

                case '/service': //page connection//

            
                    require_once("view/header.php");
                    require_once("view/service.php");
                    require_once("view/footer.php");
                    break;

                case '/contact': //page connection//


                    if (isset($_REQUEST['submit'])) {
                        $data = array(
                            "name" => $_REQUEST['name'],
                            "email" => $_REQUEST['email'],
                            "mobile" => $_REQUEST['mobile'],
                            "subject" => $_REQUEST['subject'],
                            "message" => $_REQUEST['message'],
                       
                        );

                        $this->insert("contact", $data);
                        header("location:contact");
                    }



            
                    require_once("view/header.php");
                    require_once("view/contact.php");
                    require_once("view/footer.php");
                    break;

                case '/admin-contact': //page connection//

                    $contact = $this->select("contact");

                        //   echo "<pre>";
                        // print_r($contact);
                        // echo "</pre>";

                        if (isset($_REQUEST['delete_btn'])) {
                            $this->delete("contact", "$_REQUEST[delete_btn]");
                        }

                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/admincontact.php");
                    require_once("view/admin/adminfooter.php");
                    break;

                case '/register': //page connection//

                    if (isset($_REQUEST['register'])) {
                        $data = $_REQUEST; //database jode connectt karva mate model.php//
                        $this->register($data); //database jode connectt karva mate model.php//
                        //     echo "<pre>";
                        //     print_r($_REQUEST);
                        //     echo "</pre>";
                    }

                    require_once("view/register.php");
                    break;

                case '/login':

                    $data = $_REQUEST;
                    $this->login($data);

                    require_once("view/login.php");

                    break;

                case '/logout':

                    header("location:login");

                    break;

                case '/admin-dashboard':


                    $user_detail = $this->selectwhere("pet_registration", 5);

                    //   echo "<pre>";
                    // print_r($user);
                    // echo "</pre>";

                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/adminhome.php");
                    require_once("view/admin/adminfooter.php");

                    break;


                case '/admin-users':


                    $user = $this->select("pet_registration");

                    if (isset($_REQUEST['delete_btn'])) {
                        $this->delete("pet_registration", "$_REQUEST[delete_btn]");
                    }

                    //   echo "<pre>";
                    // print_r($user);
                    // echo "</pre>";

                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/adminuser.php");
                    require_once("view/admin/adminfooter.php");
                    break;

                case '/admin-adduser':

                    if (isset($_REQUEST['submit'])) {
                        $data = array(
                            "fullname" => $_REQUEST['fullname'],
                            "username" => $_REQUEST['username'],
                            "email" => $_REQUEST['email'],
                            "mobile" => $_REQUEST['mobile'],
                            "role_as" => $_REQUEST['role_as'],
                            "password" => $_REQUEST['password'],
                        );

                        $this->insert("pet_registration", $data);
                        header("location:admin-users");
                    }

                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/adminadduser.php");
                    require_once("view/admin/adminfooter.php");
                    break;

                case '/admin-update': // for update user data
                    if (isset($_REQUEST['update-btn'])) // update-btn allusers ma click kare to
                    {
                        // echo "<pre>";
                        $response = $this->selectwhere("pet_registration", $_REQUEST["update-btn"]); // data connect karva mate selectwhere qquery in model 
                        //    print_r($response);
                        // echo "</pre>";
                        // exit;

                        require_once("view/admin/adminheader.php");
                        require_once("view/admin/adminupdateuser.php");
                        require_once("view/admin/adminfooter.php");
                    } else if (isset($_REQUEST['update-reg'])) // update user nu click karva mate update button from updateuser form
                    {



                        // $data e values data ne array ma adjust karyo
                        $data = array(
                            "fullname" => $_REQUEST["fullname"],
                            "username" => $_REQUEST["username"],
                            "email" => $_REQUEST["email"],
                            "mobile" => $_REQUEST["mobile"],
                            "role_as" => $_REQUEST["role_as"],
                            "password" => $_REQUEST["password"]

                        );
                        $response = $this->update("pet_registration", $data, $_REQUEST['update-reg']); // $id e update button mathi ave che updateuser form
                        //    echo $response;
                        header("location:admin-users"); // update par cllick kare etle users ma jase
                    } else {
                        header("location:admin-dashbaord");
                    }
                    break;


                case '/admin-product':

                    $products = $this->select("product");

                    if (isset($_REQUEST['delete_btn'])) {
                        $this->delete("product", "$_REQUEST[delete_btn]");
                    }

                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/adminproduct.php");
                    require_once("view/admin/adminfooter.php");
                    break;

                case '/admin-add-product':

                    if (isset($_REQUEST['submit'])) {

                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // print_r($_FILES);
                        // echo "</pre>";

                        $image = "uploads/product/" . time() . $_FILES['image']["name"];
                        move_uploaded_file($_FILES['image']['tmp_name'], $image);

                        $data = array(
                            "name" => $_REQUEST['name'],
                            "price" => $_REQUEST['price'],
                            "image" => $image
                        );

                        $this->insert("product", $data);
                        header("location:admin-product");
                    }

                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/adminaddproduct.php");
                    require_once("view/admin/adminfooter.php");
                    break;
                    

                  
          case '/admin-updateproduct': // for update user data
            if(isset($_REQUEST['update-pr'])) // update-btn allusers ma click kare to
            {
            //    echo "<pre>";
               $response = $this->selectwhere("product",$_REQUEST["update-pr"]); // data connect karva mate selectwhere qquery in model 
            //    print_r($response);
            //    echo "</pre>";
            //    exit;
               
               require_once("view/admin/adminheader.php");
               require_once("view/admin/adminupdateproduct.php");
               require_once("view/admin/adminfooter.php");     
            }
            else if(isset($_REQUEST['update'])) // update user nu click karva mate update button from updateuser form
            {  
                      //  echo "<pre>";
                      //  print_r($_REQUEST);
                      //  print_r($_FILES);
                      //  echo "</pre>"; 
                      //  exit;
               
                     if($_FILES['image']['error'] == UPLOAD_ERR_OK)
                         
                         {  
                          $image = "uploads/product/".time().$_FILES['image']["name"];
                          move_uploaded_file($_FILES['image']['tmp_name'],$image);
                         } 
                     else
                          {
                              $image = $_REQUEST["old_profile_pic"];
                          }


               // $data e values data ne array ma adjust karyo
               $data = array(
                    "name" => $_REQUEST["name"],
                    "price" => $_REQUEST["price"],
                    "image" => $image
               );
               $response = $this->update("product",$data,$_REQUEST['update']); // $id e update button mathi ave che updateuser form
               // echo $response;
               header("location:admin-product"); // update par cllick kare etle users ma jase
           } 
           else
           {
              header("location:admin-dashbaord");
           }
           break;
            }
        } else {
            header("location:login");
        }
    }
}
$obj = new controller; // run karayu inheritancee//

?>

<!-- <h1>hello</h1> -->