<?php

class model
{

    public $connection;

    public function __construct() // construct lakhso to to direct call thaijase//
    {

        try {
            // mysql connection karva mate//
            $this->connection = new mysqli("localhost", "root", "", "petshop");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function register($data)

    {
        array_pop($data);

        $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        $keysdata = implode(",", $keysdata);
        $valuesdata = implode("','", $valuesdata);

        // echo "<pre>";
        // print_r($keysdata);
        // echo "<br>";
        print_r($valuesdata);
        echo "<br>";
        echo "</pre>";


        $sql = "INSERT INTO pet_registration ($keysdata) VALUES ('$valuesdata')";
        $this->connection->query($sql);
    }

    public function login($data)
    {

        // if(isset($data['login'])) // data show karva mate je pan karyu hoy e
        // {

        //     echo "<pre>";
        //     print_r($_REQUEST);    
        //     echo "</pre>";    
        // }

        if (isset($data['login'])) // register data jode attached karva mate
        {
            $sql = "SELECT * FROM pet_registration WHERE (email = '$data[username]' OR username = '$data[username]') AND password = '$data[password]';";

            //   echo "<pre>";
            //   echo "$sql";
            //   echo "</pre>";

            $patsql = $this->connection->query($sql); // number of rows or another detail check

            //   echo "<pre>";
            //   print_r($patsql);
            //   echo "<pre>";

            if ($patsql->num_rows > 0) // num_row true or false
            {
                $userdata = $patsql->fetch_object(); //role as set karva mate print r karvu padse
                //    echo "<pre>";
                //    print_r($userdata);
                //    echo "</pre>";
                //    echo "login suceess";


                // $_SESSION['user'] = $username;



                // role_as //// admin = 1 ////  user = 0 ////

                if ($userdata->role_as == 1) {
                    echo "admin side";
                    header("location:admin-dashboard");
                } else {
                    echo "user side";
                    header("location:home");
                }
            } else {
                echo "login Failed";
                echo "<script> alert('Invalid Username or Password')  </script>";
            }
        } else {
            // echo "inside else";


        }
    }

    public function select($table) // data lai java mate row wise

    {

        $sql = "SELECT * FROM $table"; // badho j data che etle data connection apva mate database ane admin portel ma
        // echo $sql;
        // exit;

        $patsql = $this->connection->query($sql); // anathi badho j data database jode connect thase
        //   print_r($patsql);
        //   exit;

        if ($patsql->num_rows > 0) // num_rows uparthi avse print_r($patsql); karvatthi

        {
            //    $data = $patsql->fetch_object(); // anathi ek j array show thay while loop best che
            //    echo  "<pre>";
            //    print_r($data);
            //    echo  "</pre>";

            while ($data = $patsql->fetch_object()) // anathi jetla pan data ek karta vadhare data hase e match thai jase
            {
                $datas[] = $data;
            }
            // echo "<pre>";
            // print_r($datas);
            return $datas;
        }
    }

    public function selectwhere ($tbl,$id) // data pehla badho store karayo
            
    {
       $sql = "SELECT * FROM $tbl WHERE id = $id";
       // echo $sql;


       $patsql = $this->connection->query($sql);
       // exit;

       if($patsql->num_rows > 0)
        {
            $data = $patsql->fetch_object();
             // print_r($data);
             // exit;
        }
        else
        {
            $data = "something went wrong";
            // return $data;
        }
            return $data;
    }

    public function insert($tbl,$data)

             {
                //   array_pop($data);
     
                 $keysdata = array_keys($data);
                 $valuesdata = array_values($data);
 
                 $keysdata = implode(",",$keysdata);
                 $valuesdata = implode("','",$valuesdata);
 
                  // echo "<pre>";
                  // print_r($keysdata);
                  // echo "<br>";
                  // print_r($valuesdata);
                  // echo "<br>";
                  // echo "</pre>";
 
     
                 $sql = "INSERT INTO $tbl ($keysdata) VALUES ('$valuesdata')";
                 $this->connection->query($sql);


                 header("location:$_SERVER[PHP_SELF]"); // delete tahaya pachi pan e j page ma rakhe tena mate

             }

             public function delete($table,$id) // for delete 
             {
                 $sql = "DELETE FROM $table WHERE id = $id"; // delete ni query lakhi che with where condition

                 // echo $sql;
                 // echo "$table $id";
                 // exit;

                 $this->connection->query($sql);
                 header("location:$_SERVER[PHP_SELF]"); // delete tahaya pachi pan e j page ma rakhe tena mate
             }   

             public function update($tbl,$values,$id) // update mate 3 vastu joise

             {
                 // update query ne 3 parts ma devide karyu
    
                  $sql = "UPDATE $tbl SET "; 
    
                  foreach($values as $key => $value)  // values all are keys => values hoy etle ene foreach ma transfer karyu
                 {
                   $sql .= " $key = '$value' , ";
                 }
                  $sql = rtrim($sql," , "); // last ma koma(,) vadharano che etle right tream karyu

                 $sql .= " WHERE id = $id";
                 // echo $sql;

                 $sqlex = $this->connection->query($sql);
                 if($sqlex->num_rows > 0)
                 {
                   $data = "Updated successfully";
                 }
                 else
                 {
                  $data = "Something went wrong";
                   // echo $data;
                 }
                 return $data;

            }
}
