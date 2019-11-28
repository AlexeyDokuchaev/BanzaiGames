<?php


class UserAdapter implements Recipient
{
    /** @var User $user */
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    protected function getPhone(): string
    {
        return $this->user->phone;
    }

    protected function getEmail(): string
    {
        return $this->user->email;
    }

    protected function getSession(): string
    {
        return $this->user->sid();
    }

    /**
     * @param int|null $type
     * @return string|null
     */
    public function getContact(int $type = null): ?string
    {
        switch ($type)
        {
            case Recipient::CONTACT_TYPE_PHONE :
                return $this->getPhone();
            case Recipient::CONTACT_TYPE_EMAIL :
                return $this->getEmail();
            case Recipient::CONTACT_TYPE_SESSION :
                return $this->getSession();
            default :
                return null;
        }
    }
}