<?php
namespace iMi\RoboRun\Task\Contao;

trait loadShortcuts
{
    /**
     * @param string $action
     *
     * @return \Robo\Result
     */
    protected function _contao($action)
    {
        return $this->taskContaoStack()->exec($action)->run();
    }
}
