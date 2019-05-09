<?php
namespace Delubyo\CandTPHPWorkshop\Exercise;
use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\ExerciseCheck\StdOutExerciseCheck;
use PhpSchool\PhpWorkshop\ExerciseDispatcher;

class SumThem extends AbstractExercise implements ExerciseInterface, CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Sum Them';
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Simple Addition';
    }
    /**
     * @return array
     */
    public function getArgs()
    {
        $numArgs = rand(0, 10);
        $args = [];
        for ($i = 0; $i < $numArgs; $i ++) {
            $args[] = rand(0, 100);
        }
        return $args;
    }
    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}