<?php
namespace iMi\RoboContao\Task\Contao;

use Robo\Task\CommandStack;

/**
 * Runs Conrun commands in stack. You can use `stopOnFail()` to point that stack should be terminated on first fail.
 *
 * ``` php
 * <?php
 * $this->taskConrunStack()
 *  ->stopOnFail()
 *  ->exec('db:import master.sql')
 *  ->cacheFlush()
 *  ->run()
 *
 * ?>
 * ```
 */
class Stack extends CommandStack
{
	/**
	 * @param null|string $pathToConrun
	 *
	 * @throws \Robo\Exception\TaskException
	 */
	public function __construct($pathToContao = null)
	{
		$this->executable = $pathToConrun;
		if (!$this->executable) {
			$this->executable = $this->findExecutable('contao-console');
		}
		if (!$this->executable) {
			throw new TaskException(__CLASS__, "Contao 4 console could not be found in your project. You could try to run 'composer install' and try again");
		}
	}

    /**
     * Executes `cache:flush`
     *
     * @return $this
     */
    public function cacheFlush()
    {
        return $this->exec(['cache:clear']);
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $this->printTaskInfo("Running Contao 4 console commands...");
        return parent::run();
    }
}
