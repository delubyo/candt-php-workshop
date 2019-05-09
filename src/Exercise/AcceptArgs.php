<?php
namespace Delubyo\CandTPHPWorkshop\Exercise;
use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\ExerciseCheck\StdOutExerciseCheck;
use PhpSchool\PhpWorkshop\ExerciseDispatcher;
/**
 * Class AcceptArgs
 */
class AcceptArgs extends AbstractExercise implements ExerciseInterface, CliExercise
{

    /**
     * @return string
     */
    public function getName()
    {
        return 'Accept Args';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Accept and display a numeric argument';
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        $args = [];
        $args[] = 100;
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