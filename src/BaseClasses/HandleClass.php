<?php
namespace Lotiger\BaseClasses;
use Lotiger\Contracts\BaseHas;

class HandleClass implements BaseHas
{
    protected $post;
    protected $get;
    protected $request;
    protected $server;
    protected $postInput;

    public function post()
    {
        return $this->post;
    }

    public function get()
    {
        return $this->pogetst;
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