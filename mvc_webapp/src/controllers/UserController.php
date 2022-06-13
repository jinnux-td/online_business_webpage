<?php
require_once dirname( __DIR__ ).'/controllers/base_controller/BaseController.php';
require_once APP_ROOT.'/src/controllers/AuthenticationController.php';

class UserController extends BaseController
{
  function __construct()
  {
    $this->folder = 'screen_user';
  }

  public function index()
  {
    AuthenticationController::requireLogin();
    $this->render('UserScreen');
  }

  public function bills()
  {
    $this->render('BillScreen');
  }
  
  public function billsAdmin()
  {
    $this->render('BillsAdminScreen');
  }
  
  public function servicesAdmin()
  {
    $this->render('ServicesAdminScreen');
  }
  
  public function postAdmin()
  {
    $this->render('PostAdminScreen');
  }
  
  public function password()
  {
    $this->render('PasswordScreen');
  }
  
  public function account()
  {
    AuthenticationController::requireLogin();
    $this->render('UserScreen');
  }
  

  // User quan ly post cua minh
  public function addPost($post)
  {
    AuthenticationController::requireLogin();
    $this->render('UserScreen');
  }

  public function deletePost($id)
  {
    AuthenticationController::requireLogin();
    $this->render('UserScreen');
  }

  public function modifyPost($id)
  {
    AuthenticationController::requireLogin();
    $this->render('UserScreen');
  }


  // Thay doi thong tin user
  public function modifyUser($id)
  {
    AuthenticationController::requireLogin();
    $this->render('UserScreen');
  }
  
}

?>