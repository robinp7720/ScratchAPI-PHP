<?php
/**
 * Created by PhpStorm.
 * User: robin
 * Date: 7/8/16
 * Time: 5:31 PM
 */

namespace ScratchAPI;


class User extends Scratch
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
        return $this;
    }
    
    public function following()
    {
        return json_decode(file_get_contents($this->API_SERVER."/users/{$this->user}/following"),true);
    }

    public function followers()
    {
        return json_decode(file_get_contents($this->API_SERVER."/users/{$this->user}/followers"),true);
    }

    public function messageCount()
    {
        return json_decode(file_get_contents($this->API_SERVER."/users/{$this->user}/messages/count"),true);
    }
}