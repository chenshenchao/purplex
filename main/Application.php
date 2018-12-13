<?php namespace purplex;

use Dotenv\Dotenv;
use palex\Dictionary;
use palex\Filesystem;

/**
 * 
 */
final class Application {
    private $env;
    private $setting;
    private $filesystem;

    /**
     * 
     */
    public function __construct($projectPath) {
        $this->env = new Dotenv($projectPath);
        $this->setting = new Dictionary();
        $this->filesystem = new Filesystem([
            '@project' => $projectPath,
            '@public' => $projectPath.Filesysem::DS.'public',
            '@runtime' => $projectPath.Filesystem::DS.'runtime',
        ]);
    }

    /**
     * 
     */
    public function apply($startTime) {
        $this->env->load();
        $debug = $_ENV['PURPLEX_DEBUG'] ?? false;
        $trace = $_ENV['PURPLEX_TRACE'] ?? false;
    }
}