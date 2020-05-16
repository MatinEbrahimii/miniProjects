<?php


class Bold extends RegexRule
{
    public function rule()
    {
        return '/(\*\*|__)(.+?)\1/';
    }

    public function replacement()
    {
        return '<b>$2</b>';
    }
}