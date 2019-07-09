<?php
namespace Lotiger\Contracts;
interface RequestHas
{
    public function post();
    public function get();
    public function request();
    public function server();
    public function postInput();
}
