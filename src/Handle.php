<?php
namespace Lotiger;

use Lotiger\BaseClasses\Get;
use Lotiger\BaseClasses\Post;
use Lotiger\BaseClasses\Request;
use Lotiger\BaseClasses\Server;
use Lotiger\BaseClasses\HandleClass;

class Handle extends HandleClass
{
    public function __construct()
    {
        $this->post = new Post($_POST);
        $this->get = new Get($_GET);
        $this->request = new Request($_REQUEST);
        $this->server = new Server($_SERVER);
        $this->postInput = file_get_contents('php://input');
    }
}