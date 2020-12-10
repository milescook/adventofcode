<?php

namespace Repository;

class NumberlistRepositoryJSON implements INumberlistRepository
{
    /**
     * @return array<int>
     */
    public function getNumbers() : array
    {
        $string = file_get_contents("./data.json");
        $numbers = json_decode($string);
        return $numbers->numbers;
    }
}