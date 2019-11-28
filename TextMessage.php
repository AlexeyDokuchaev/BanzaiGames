<?php


class TextMessage implements NotificationMessage
{
    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->text;
    }
}