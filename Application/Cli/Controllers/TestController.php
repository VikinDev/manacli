<?php
namespace Application\Cli\Controllers;

class TestController extends \ManaPHP\Cli\Controller
{
    /**
     * @CliCommand demo for cli write
     */
    public function defaultCommand()
    {
        var_dump(get_included_files());
    }
}