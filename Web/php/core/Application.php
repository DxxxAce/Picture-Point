<?php
namespace app\core;
use app\core\Config;
use app\models\User;

class Application
{
    public Router $router;
    public User $userClass;
    public Request $request;
    public Session $session;
    public Response $response;
    public static Application $app;
    public Database $db;
    public static string $ROOT_DIR;
    public Controller $controller;
    public ?DbModel $user;
    public function __construct($rootPath, array $config)
    {
        $this->userClass = new $config['userClass'];
        self::$ROOT_DIR = $rootPath;
        self::$app=$this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router= new Router($this->request,$this->response);

        $this->db = new Database($config['db']);
        $primaryValue = $this->session->get('user');

        if($primaryValue){
            $primaryKey = $this->userClass->primaryKey();
            $this->user= $this->userClass->findOne([$primaryKey=>$primaryValue ]);
        } else{
            $this->user = null;
        }

    }

    public static function isGuest()
    {
        return !self::$app->user;
    }

    public function run()
    {
      echo  $this->router->resolve();
    }


    public function getController(): Controller
    {
        return $this->controller;
    }

    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }

    public function login(DbModel $user)
    {
        $this->user=$user;
        $primaryKey=$user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user',$primaryValue);
        return true;
    }

    public function recover($string)
    {

    }

    public function logout()
    {
        $this->user=null;
        $this->session->remove('user');
        if (isset($_COOKIE['PHPSESSID'])) {
            unset($_COOKIE['PHPSESSID']);
            setcookie('PHPSESSID', '', time() - 3600, '/');
            setcookie('unspuser', '', time() - 3600, '/');
        }
    }

}