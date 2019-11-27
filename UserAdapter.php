<?php


class UserAdapter implements Recipient
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    protected function getPhone()
    {
        return $this->user->phone;
    }

    protected function getEmail()
    {
        return $this->user->email;
    }

    /**
     * @param int|null $type
     * @return mixed
     */
    public function getContact(int $type = null)
    {
        switch ($type)
        {
            case Recipient::CONTACT_TYPE_PHONE :
                return $this->getPhone();
            case Recipient::CONTACT_TYPE_EMAIL :
                return $this->getEmail();
            default :
                return false;
        }
    }
}