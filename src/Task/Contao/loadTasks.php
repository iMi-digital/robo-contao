<?php
namespace iMi\RoboContao\Task\Contao;

trait loadTasks
{
    /**
     * @param string $pathToConrun
     *
     * @return \iMi\RoboContao\Task\Contao\Stack
     */
    protected function taskContaoStack($pathToContao = null)
    {
        return $this->task(Stack::class, $pathToContao);
    }
}
