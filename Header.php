<?php


class Header extends RegexRule
{
    public function rule()
    {
        return '/#+\s*(.+)/';
    }

    public function replacement()
    {
        return '<h3>$1</h3>';
    }
}