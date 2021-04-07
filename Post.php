<?php


class Post
{
    protected static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): Post
    {
        return self::$instance ?? (self::$instance = new Post());
    }

    protected function __clone()
    {
    }

    public function __get($name): string
    {
        return $_POST[$name] ?? 'false';
    }
}
