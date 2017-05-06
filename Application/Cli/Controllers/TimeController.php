<?php
namespace Application\Cli\Controllers;

use ManaPHP\Cli\Controller;

class TimeController extends Controller
{
    /**
     * @CliCommand  show current time
     * @CliParam    --format,-f          date format, default is Y-m-d H:i:s
     * @CliParam    --include-timestamp  show timestamp or not
     */
    public function defaultCommand()
    {
        $format = $this->arguments->get('format:f', 'Y-m-d H:i:s');
        $data = [];
        $data['time'] = date($format, time());
        if ($this->arguments->has('include-timestamp')) {
            $data['timestamp'] = time();
        }

        $this->console->writeLn(json_encode($data, JSON_PRETTY_PRINT));
    }
}