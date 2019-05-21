<?php

// INSERT: IROBO_BOILERPLATE //

class RoboFile extends \Robo\Tasks {
	use \iMi\RoboPack\LoadTasks;

    /**
     * It is important to stop execution if there was an error
     */
    public function __construct() {
        $this->stopOnFail();
    }

    /**
	 * Initial project setup
	 */
	public function setup() {
		$config = $this->askSetup();
		
		//TODO write parameters.yml
        //run install commands
        		
		$this->update();
	}

	/**
	 * Update the project from VCS and everything else
	 */
	public function update() {
		$this->taskGitStack()
		     ->pull()->run();
		$this->updateDependencies();
		$this->updateAssets();
		$this->cacheFlush();
	}

	/**
	 * Update dependencies only
	 */
	public function updateDependencies() {
		$this->taskComposerInstall()->run();
	}

    /**
     * Update assets
     */
    public function updateAssets()
    {
        $this->say('NYI');
        //execute assets function(s) from contao 4
    }

    /**
     * Update Database only
     */
    public function dbUpdate() {
        $this->say('NYI');
        //TODO implement db function contao 4
    }

	/**
	 * Replace the database with a clean one
	 */
	public function dbReplace() {
        $this->say('NYI');
        //TODO implement db function for contao 4
    }

	/**
	 * Flush all caches we know about
	 */
	public function cacheFlush() {
        $this->say('NYI');
        //TODO implement contao 4 cache flush
	}

    /**
     * Shows the contao log
     */
    public function logTail()
    {
        $this->say('NYI');
        $this->_exec('tail -f -n0 var/logs/*log');
    }

    public function setupDev()
    {
        $this->say('NYI');
        //Inject database user?
    }
}
