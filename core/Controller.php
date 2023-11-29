<?php

namespace App\Core;

use App\Core\Request;
use Digia\InstanceFactory\InstanceFactory;

class Controller
{
    protected string $layout = "base";
    protected Request $request;
    public function __construct(Request $request)
    {

        $this->request = $request;
    }

    public function instance(string $classe, array $data)
    {
        return $instanced = InstanceFactory::fromProperties($classe, $data);
    }
    
    public function render(string $path, array $data = [])
    {
        $data["Constantes"] = Constantes::class;
        $data["Session"] = Session::class;
        $data["request"] = $this->request;
        $data['Controller']= Controller::class;
        ob_start();
        extract($data);
        require_once(Constantes::ROOT() . "views/" . $path);
        $contents_for_views = ob_get_clean();
        require_once(Constantes::ROOT() . "views/layout/" . $this->layout . ".html.php");
    }

    public function redirectToRoute($uri)
    {
        header("location:" . Constantes::WEB_ROOT . $uri);
        exit();
    }
    
}
