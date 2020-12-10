<?php

use Repository\INumberlistRepository;

class NumberCalculator
{
    /** @var INumberlistRepository $NumberlistRepository The Number repository */
    var $NumberlistRepository;

    /** @var int $target The number we are looking for */
    var $target;

    /**
     * @param INumberlistRepository $NumberlistRepository
     */
    public function __construct(INumberlistRepository $NumberlistRepository, int $target)
    {
        $this->NumberlistRepository = $NumberlistRepository;
        $this->target = $target;
    }

    /**
     * @param int $testNumber Number to test against, 
     * if it combined with numbers in the list add up to the target
     * @return array<int> The number matched to make the target
     */
    public function getMatchedNumber($testNumber) : array
    {
        $numbersMatching = [];
        
        foreach($this->NumberlistRepository->getNumbers() as $listNumber)
        {
            if(($testNumber + $listNumber) == $this->target)
                $numbersMatching[] = $listNumber;
        }

        return $numbersMatching;
    }
}
