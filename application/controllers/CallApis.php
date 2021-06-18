<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CallApis extends CI_Controller {
function __construct() {
		parent::__construct();
   $this->load->helper('url');
     
	}

public function index()
	{
		$this->load->view('CallApiIndex');
	}


public function CallApi_fn(){

if(isset($_POST['api_one'])){
	
$url='https://reqres.in/api/users/1';
}else if(isset($_POST['api_two'])){
	$url='https://reqres.in/api/users/3';
}else if(isset($_POST['api_three'])){
	$url='https://reqres.in/api/users/10';
}else{
	$url="";
}


	$response = file_get_contents($url);
	$response = json_decode($response);

if(!empty($response)){

if(!empty($response->data)){
$data['result']=$response->data->email;
}else{
	$data['result']="";
}


}else{
	$data['result']="";
}

$this->load->view('CallApiIndex',$data);
}







}