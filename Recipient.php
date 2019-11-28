<?php


interface Recipient
{
    public const CONTACT_TYPE_PHONE = 1;
    public const CONTACT_TYPE_EMAIL = 2;
    public const CONTACT_TYPE_SESSION = 3;

    /**
     * @param int|null $type
     * @return mixed
     */
    public function getContact(int $type = null);
}