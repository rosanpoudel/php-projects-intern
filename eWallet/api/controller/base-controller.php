<?php 
	require_once('connection.php');
  require_once('mail.php');
  require_once('../resources/jwt/vendor/autoload.php');
  use \Firebase\JWT\JWT;
  define('ALGORITHM', 'HS256');
  define('SECRET_KEY', 'abcde');

	abstract class BaseController
 {
		  private $actions;
  		protected $method, $action, $input , $temp , $errors;
      protected $token , $headers;

  		public function __construct(){

        // request methods
  			$this->method = $_SERVER['REQUEST_METHOD'];

        // getting headers
        $this->headers = getallheaders();

        // checking whether header is set or not
        if(isset($this->headers['authorization'])){
          $this->token = $this->headers['authorization'];
        }

        // checking if id is passed in url or not
        if(isset($_GET['id'])){
          $this->temp = $_GET['id'];
        }
        // check if action is present or not
        if (isset($_GET['action'])) {
          $this->setAction($_GET['action']);
        }
  			// is action valid?
  			if (isset($this->action)){
  			  $this->_isActionValid($this->action);
  			}

        // for request methods
        switch ($this->method){
  				case 'GET':
  					break;

  				case 'POST':
          			$this->input = json_decode(file_get_contents('php://input'), true);
          			break;

      			case 'PUT':
          			$this->input = json_decode(file_get_contents('php://input'), true);
      				break;

      			case 'DELETE':
      				break;

      			default:
          			echo 'error';
          			break;			
  			}		
  		}

      
      // functionalities

      protected function _response($data, $status = 200){
        header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
        echo $data . "\n";
      }

      protected function _requestStatus($code){
        $status = array(  
            200 => 'OK',
            401 => 'Unauthorized',
            404 => 'Not Found',   
            405 => 'Method Not Allowed',
            500 => 'Internal Server Error',
        );
        return ($status[$code])?$status[$code]:$status[500];
        
      }

		  protected function _isActionValid($request){
		    $this->actions = array(
		      'login',
          'register',
          'forgotpassword',
          'getusers',
          'delete',
          'getdashboarddata',
          'addnewdata',
          'editcategory',
          'getcategorydata',
          'addcategorydata',
          'deletecategorydata',
          'editcategorydata',
		    );

		    if(!in_array($request, $this->actions)) {
		      $this->_response('Action (' . $request . ') not found.', 404);
		      exit;
		    }
		  }

      public function setAction($action){
        $this->action = $action;
        return $this;
      }
	}
