<?php
require_once __DIR__ . '/../../helpers.php';
require_once __DIR__ . '/../Models/User.php';

class Authentication
{
    public function __construct(
        public $model = User::class
    ) {
    }

    public function authenticate(array $credentials): bool
    {
        $model = (new $this->model)->getByCredentials($credentials['email']);

        $authenticated = password_verify(($credentials['password'] ?? ''), ($model['password'] ?? ''));

        if ($authenticated) {
            $this->setAuthenticated($model);
            return true;
        }else{
            return false;
        }
    }

    public function unAuthenticate()
    {
        session_destroy();
    }

    public function setAuthenticated($model): void
    {
        $_SESSION['is_authenticated'] = 1;
        $_SESSION['user_id'] = $model['id'];
    }
}
