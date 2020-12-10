<?php

namespace Repository;

interface INumberlistRepository
{
    /**
     * @return array<int>
     */
    public function getNumbers() : array;
}