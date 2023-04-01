<?php

class Users{
    protected $users;

    public function addUser($user){
        $this->users[] = $user;
    }

    public function handleVisitor($visitor){
        foreach ($this->users as $user) {
            $user->accept($visitor);
        }
    }
}