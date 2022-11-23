<?php

require_once  __DIR__  . "/../../auth/Authentication.php";

class AuthController
{
    private $isAuth = 0;

    public function __construct(
        private Authentication $auth = new Authentication()
    ) {
        if (($_SESSION['is_authenticated'] ?? '')) {
            $this->isAuth = 1;
        }
    }

    public function login(Request $request)
    {  
        if($this->isAuth || $this->auth->authenticate($request->all())){
            redirect('/');
        }else{
            redirectWithMessages('/', ['errors'=>['Username or password incorrect']]);
        }
    }

    public function loginForm()
    {
        if (!$this->isAuth) {
            view(__DIR__ . '/../../../Views/app/auth/login_form.php');
        }else{
            redirect('/');
        }
    }

    public function logout()
    {
        if ($this->isAuth) {
            $this->auth->unAuthenticate();
        }

        redirect('/');
    }
}
