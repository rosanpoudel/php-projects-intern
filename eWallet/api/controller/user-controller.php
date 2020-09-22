<?php 
	require_once('base-controller.php');
	use \Firebase\JWT\JWT;

	class users extends BaseController{
		private $db , $query , $data ,$result;
		private $email , $password;
		protected $temp , $errors;
    	private $Key, $jwt;
        private $characters, $charactersLength, $length, $randomString;


		public function __construct(){
			parent::__construct();

			$this->errors = [
		        'login-error' => 'Incorrect username or password.',
		        'register-error' => 'Incorrect information.',
		        'forgot-password-error' => 'No such email found.',
      		];

			$this->db = new connect;

			// switch case for methods

			switch($this->method){
				
				// for post method
				case 'POST':
					switch($this->action){
						case'login':
							if (isset($this->input['email'] , $this->input['password']) and $this->input['email'] != "" and $this->input['password'] !=""){

								$this->login();

							}else{
                				echo $this->errors['login-error'];
							}
						break;

						case 'register':
							if(isset($this->input['username'] , $this->input['email'] , $this->input['password']) and $this->input['username']!="" and $this->input['email']!="" and $this->input['password'] !=""){

								$this->register();

							}else{
                				echo $this->errors['register-error'];	
							}
						break;

						case 'addnewdata':
							if(isset($this->input['categoryname']) and $this->input['categoryname']!=""){
								$this->addnewdata();
							}else{
								echo 'Error adding data';
							}
						break;

						case 'forgotpassword':
							if(isset($this->input['email']) and $this->input['email']!=""){
								$this->mailforgotpassword();
							}else{
                				echo $this->errors['forgot-password-error'];
							}
						break;

						case 'addcategorydata':
							if(isset($this->input['categorydataname']) and $this->input['categorydataname']!=""){ 
								$this->addcategorydata();
							}else{
								echo 'Error adding data';
							}
						break;

						default:
              				$this->_response('Incorrect Method or Action.', 405);
            				break;
					}
				break;

				// for get method
				case 'GET':
					switch($this->action){
						case 'getusers':
							$this->getusers();
						break;

						case 'getdashboarddata':
							$this->getDashboardData();
						break;

						case 'getcategorydata':
							$this->getcategorydata();	
						break;	

						default:
              				$this->_response('Incorrect Method or Action.', 405);
            				break;
					}
				break;

				// for put method
				case 'PUT':
					switch($this->action){
						case 'editcategory':
							$this->update();
						break;

						case 'editcategorydata':
							$this->editcategorydata();
						break;
						
						default:
              				$this->_response('Incorrect Method or Action.', 405);
            				break;
					}
				break;

				// for delete  method
				case 'DELETE':
					switch($this->action){
						case 'delete':
							$this->delete();
						break;

						case 'deletecategorydata':
							$this->deletecategorydata();
						break;

						default:
              				$this->_response('Incorrect Method or Action.', 405);
            				break;
					}
				break;
			}
		}


		// functionalities


		
		protected function runquery(){
      		$this->result = mysqli_query($this->db->getConnection(), $this->query);
		}

		// for login
		protected function login(){
			$this->email = $this->input['email'];
			$this->password = $this->input['password'];

			$this->query = "SELECT * FROM user WHERE email = '$this->email' AND password = '$this->password'";
			$this->runquery();

				if($this->result->num_rows == 0){
	        		$data = [
	        		 	'status' => 400, 
	        		 	'message' => "Login Failed", 
	        		 	'data' => [] 
	        		 ]; 
				    echo json_encode($data);
	      		}else{
	      			while($row=mysqli_fetch_array($this->result)){
	      				$id = $row['id'];
	      			}
	      
				    $this->tokenId = base64_encode(mcrypt_create_iv(32));
			        $this->issuedAt = time();
			        $this->notBefore  = $this->issuedAt + 100;  //Adding 10 seconds
			        $this->expire     = $this->notBefore + 7200; // Adding 60 seconds
			        $this->serverName = $_SERVER["SERVER_NAME"];
				    $this->data = [
				    	'iat' => $this->issuedAt,
        				'jti' => $this->tokenId,
        				'iss' => $this->serverName,
        				'nbf' => $this->notBefore,
        				'exp' => $this->expire,
        				'data' => [
				    		'id' => $id,
			        		'email' => $this->email,
			        	]
				    ];

				    $this->token = JWT::encode($this->data, SECRET_KEY ,'HS256');  //token encoded with secretkey and  'hs512' algorithm
				    $data = [
	        		 	'status' => 200, 
	        		 	'message' => "User Login Successful", 
	        		 	'data' => [
	        		 		'id'=> $id,
	        		 		'token' => $this->token
	        		 	] 
	        		 ]; 
				    echo json_encode($data);
	      		}
		}


		// for getting dashboard data
		protected function getDashboardData(){

			// if token is present
			if($this->token){
            	$this->token = JWT::decode($this->token, SECRET_KEY ,array('HS256'));
            	$user_id = $this->token->data->id;

				$this->query = "SELECT * FROM category WHERE user_id = $user_id";
				$this->runquery();

					if($this->result){
						while($row=mysqli_fetch_assoc($this->result)){
							$data[]=$row;
						}
					$this->arr = [
						'status' => 200,
						'message' => "success",
						'data' => $data
					];
					echo json_encode($this->arr);
					}else{
						$this->arr = [
							'status' => 404,
							'message' => "Failed",
							'data' => [] 
						];
						echo json_encode($this->arr);
					}
			}else{
		      echo $this->_response('Cookie Not Found.', 404);	
			}
		}

		// for regestiring user
		protected function register(){
			$this->username = $this->input['username'];
			$this->email = $this->input['email'];
			$this->password = $this->input['password'];

			$this->query = "INSERT INTO user (`username` , `email` , `password`) VALUES ('$this->username' , '$this->email' , '$this->password')";
			$this->runquery();

			if($this->result){
				$this->arr = [
					'status' => 200,
					'message' => "User  Registered Successfully",
					'data' => [] 
					];
        		echo json_encode($this->arr);
			}else{
				$this->arr = [
					'status' => 404,
					'message' => "Failed to Register", 
					'data' => []
				];
        		echo json_encode($this->arr);
			}
		}



		// for add new category
		protected function addnewdata(){
			if($this->token){
            	$this->token = JWT::decode($this->token, SECRET_KEY ,array('HS256'));
				$this->categoryname = $this->input['categoryname'];
				$this->user_id = $this->input['user'];

				$this->query = "INSERT INTO category (`name` , `user_id`) VALUES ('$this->categoryname' , '$this->user_id')";
				$this->runquery();
				if($this->result){
					$this->arr = [
						'status' => 200,
						'message' => "data added Successfully",
						'data' => [] 
						];
	        		echo json_encode($this->arr);
				}else{
				echo 'failed to add';
				}
			}else{
		      $this->_response('Cookie Not Found.', 404);
			}
		}


		// for forgotpassword
		protected function mailforgotpassword(){

      		$this->email = $this->input['email'];
      		$this->query = "SELECT * FROM user WHERE email='$this->email'";
      		$this->runQuery();

      		if($this->result->num_rows == 0) {
        		echo $this->errors['forgot-password-error'];
        		exit;
      		}else{
      			$this->characters = '0123';
				$this->charactersLength = strlen($this->characters);
        		$this->length = 2;
				$this->randomString = '';
        		for ($i = 0; $i < $this->length; $i++) {
            		$this->randomString .= $this->characters[rand(0, $this->charactersLength - 1)];
        		}
        		// sending email with random string
        		sendMail("cloudroshanp@gmail.com" , $this->email , "Retriving Password" , $this->randomString , "cloudroshanp@gmail.com");

        		$this->query = "UPDATE user SET password = '$this->randomString' WHERE email = '$this->email' ";
        		$this->runquery();
        		if($this->result){
        			echo 'successfully Updated';
        		}else{
        			echo 'failed to update user';
				}
      		}
		}


		// get users
		protected function getusers(){
			$this->query = "SELECT * FROM user";
			$this->runquery();

				if($this->result->num_rows == 0) {
	        		 $this->arr = [
	        		 	'status' => 404 , 
	        		 	'message' => "No Users found", 
	        		 	'data' => [] 
	        		 ];
	        		 echo json_encode($this->arr);
	      		}else{
	      			while($this->data = mysqli_fetch_row($this->result)){
	  				echo json_encode($this->data);
	      			}
	      			
	      		}
		}


		// for updating or editing category
		protected function update(){
			if($this->token){
				$this->categoryname = $this->input['categoryname'];
				$this->categoryid = $this->input['categoryid'];
				$this->userid = $this->input['userid'];


			 	$this->query = "UPDATE category SET name = '$this->categoryname' , user_id = '$this->userid' WHERE id = '$this->categoryid' ";
			 	$this->runquery();

				 	if($this->result){
				 		$this->arr = [
				 			'status' => 200, 
				 			'message' => "Updated Successfully", 
				 			'data' => [] 
				 		];
		        		echo json_encode( $this->arr );

				 	}else{
				 		$this->arr = [
				 			'status' => 404 , 
				 			'message' => "Update Failed", 
				 			'data' => [] 
				 		];
		        		echo json_encode($this->arr);
				 	}
		 	}else{
		      $this->_response('Cookie Not Found.', 404);	
		 	}																			
		}


		// deleting category
		protected function delete(){
			if($this->token){
				$this->query = "DELETE FROM categorydata WHERE category_id = $this->temp";
				$this->runquery();

				if($this->result){
					$this->query = "DELETE FROM category WHERE id=$this->temp ";
					$this->runquery();

					$this->arr = [
						'status' => 200,
						'message' => "User  Deleted!",
						'data' => []
					];
	        		echo json_encode($this->arr);
				}else{
					$this->arr = [
						'status' => 404, 
						'message' => "Failed", 
						'data' => []
					];

	        		echo json_encode($this->arr);
				}
			}else{
		      $this->_response('Cookie Not Found.', 404);	
			}
		}


		// for getting each category data
		protected function getcategorydata(){
			if($this->token){
            	$this->token = JWT::decode($this->token, SECRET_KEY ,array('HS256'));
				$this->query = "SELECT * FROM categorydata WHERE category_id = $this->temp ";
				$this->runquery();

				if($this->result){
					while($row=mysqli_fetch_assoc($this->result)){
					$data[]=$row;
				}

				$this->arr = [
					'status' => 200, 
					'message' => "success",
					'data' => $data
				];
				echo json_encode($this->arr);
				}else{
					$this->arr = [
						'status' => 404, 
						'message' => "Failed",
						'data' => []
					];
				    echo json_encode($this->arr);
				}
			}else{
		      $this->_response('Cookie Not Found.', 404);
			}
		}
		


		// for adding categorydata data
		protected function addcategorydata(){
			if($this->token){
            	$this->token = JWT::decode($this->token, SECRET_KEY ,array('HS256'));
				$this->categorydataname = $this->input['categorydataname'];
				$this->category_id = $this->input['categoryid'];

				$this->query = "INSERT INTO categorydata (`field_name`,`category_id`) VALUES ('$this->categorydataname' , '$this->category_id') ";
				$this->runquery();

				if($this->result){
					$this->arr = [
							'status' => 200,
							'message' => "data added Successfully",
							'data' => []
							];
		        	echo json_encode($this->arr);
				}else{
					echo 'failed to add';
				}
			}else{
		      $this->_response('Cookie Not Found.', 404);
			}
		}




		// for deleting categorydata
		protected function deletecategorydata(){
			if($this->token){
            	$this->token = JWT::decode($this->token, SECRET_KEY ,array('HS256'));
				$this->query = "DELETE FROM categorydata WHERE id = $this->temp";
				$this->runquery();

				if($this->result){
					$this->arr = [
						'status' => 200, 
						'message' => "data  Deleted!",
						'data' => [] 
					];
	        		echo json_encode($this->arr);
				}else{
					$this->arr = [
						'status' => 404, 
						'message' => "Failed",
						'data' => [] 
					];
	        	echo json_encode($this->arr);
				}
			}else{
			  $this->_response('Cookie Not Found.', 404);
			}
		}



		// for editing categorydata
		protected function editcategorydata(){
			if($this->token){
            	$this->token = JWT::decode($this->token, SECRET_KEY ,array('HS256'));
				$this->categorydataname = $this->input['categorydataname'];
				$this->categorydataid = $this->input['categorydataid'];
				$this->category_id = $this->input['categoryid'];

			 	$this->query = "UPDATE categorydata SET field_name = '$this->categorydataname' , category_id = '$this->category_id' WHERE id = '$this->categorydataid' ";

			 	$this->runquery();

			 	if($this->result){
			 		$this->arr = [
			 			'status' => 200,
			 			'message' => "Updated Successfully",
			 			'data' => []
			 		];
	        		echo json_encode( $this->arr );

			 	}else{
			 		$this->arr = [
			 			'status' => 404, 
			 			'message' => "Update Failed", 
			 			'data' => [] 
			 		];
	        		echo json_encode($this->arr);
			 	}
			}else{
		      $this->_response('Cookie Not Found.', 404);
			}
		}		
	}
	$user = new users();
?>