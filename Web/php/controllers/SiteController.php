<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "Miguel"
        ];
        return $this->render('home',$params);
    }
    public function contact()
    {
      return $this->render('information');
    }

    public function settings()
    {
        return $this->render('settings');
    }
   public function gallery(){
        return $this->render('gallery');
   }
    public function handleContact(Request $request)
    {
        $body=$request->getBody();
        return 'Handling submitted data';
    }
}