
<?php
require_once("Model/Model.php");
class Controller extends Model
{
  public $baseURL = "";
  function __construct()
  {
    ob_start();
    parent::__construct();
    $this->baseURL = "http://localhost/assessment-2/Employee_Management_System/Assests/";
    if (isset($_SERVER['PATH_INFO'])) {
      switch ($_SERVER['PATH_INFO']) {
        case '/home':
          include_once("Views/header.php");
          include_once("Views/homepage.php");
          include_once("Views/footer.php");
          break;
        case '/about':
          include_once("Views/header.php");
          include_once("Views/about.php");
          include_once("Views/footer.php");
          break;
        case '/contact':
          include_once("Views/header.php");
          include_once("Views/contact.php");
          include_once("Views/footer.php");
          break;
        case '/delete':
          $DeleteRes = $this->Delete("employee", array("id" => $_GET['userid']));
          if($DeleteRes['Code'] == 1){
            header("location:viewemployee"); 
          }

          break;
        case '/edit':
          $ViewRes = $this->Select("employee", array("id" => $_GET['userid']));
          // echo "<pre>";
          // print_r($ViewRes['Data'][0]);
          // echo "</pre>";

          include_once("Views/edit.php");
          if (isset($_POST['update'])) {
            array_pop($_POST);
            $Data = $_POST;
            $UpdateRes = $this->Update("employee", $Data, array("id" => $_GET["userid"]));
            // echo "<pre>";
            // print_r($UpdateRes);
            // echo "</pre>";
            if ($UpdateRes['Code'] == 1) {
              header("location:viewemployee");
            }
          }
          break;
        case '/viewemployee':

          $ViewEmployeeRes = $this->Select("employee");
          // echo "<pre>";
          // print_r($ViewEmployeeRes['Data']);
          // echo "</pre>";
          include_once("Views/viewemployee.php");
          break;
        case '/addemployee':
          include_once("Views/addemployee.php");
          if (isset($_POST['add'])) {
            array_pop($_POST);
            // echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";
            $Data = $_POST;
            if ($_POST['password'] != $_POST['cpassword']) {
              echo "<script>
              alert('Enter valid confrom password')
              </script>";
            } else {
              $InserRes = $this->Insert("employee", $Data);
            }
            if ($InserRes['Code'] == 1) {
              echo "<script>
              alert ('Employee Data Succesfully ADD.');
              window.location.href='viewemployee';
              </script>";
              // header("location:viewemployee");
            }
          }

          break;

        default:
          # code...
          break;
      }
    } else {
      header("location:home");
    }
    ob_flush();
  }
}

$Controller = new Controller;
?>