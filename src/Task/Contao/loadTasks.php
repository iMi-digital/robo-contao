<?php
namespace iMi\RoboRun\Task\Contao;

trait loadTasks
{
    /**
     * @param string $pathToConrun
     *
     * @return \iMi\RoboRun\Task\Contao\Stack
     */
    protected function taskContaoStack($pathToContao = null)
    {
        return $this->task(Stack::class, $pathToContao);
    }
}
