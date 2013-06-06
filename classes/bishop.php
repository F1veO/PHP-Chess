<?php

require_once 'piece.php';

class Bishop extends Piece
{
    public function __construct($x, $y, $color)
    {
        parent::__construct($x, $y, $color);
    }

    public function __toString()
    {
        return '<img src="sprites/' . $this->color . '_bishop.png" />';
    }

    public function CanMove()
    {
        
    }
}