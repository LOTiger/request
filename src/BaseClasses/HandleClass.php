<?php
namespace Lotiger\BaseClasses;
use Lotiger\Contracts\BaseHas;

class HandleClass implements BaseHas
{
    public $post;
    public $get;
    public $request;
    public $server;
    public $postInput;

    public function post()
    {
        return $this->post;
    }

    public function get()
    {
        return $this->get;
    }

    public function request()
    {
        return $this->request;
    }

    public function server()
    {
        return $this->server;
    }

    public function postInput()
    {
        return $this->postInput;
    }
}