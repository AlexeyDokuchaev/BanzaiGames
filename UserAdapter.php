<?php


class UserAdapter implements Recipient
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getPhone()
    {
        return $this->user->phone;
    }

    public function getEmail()
    {
        return $this->user->email;
    }
}