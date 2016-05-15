<?php
namespace Gummibeer\Backuplay\Events;

use Gummibeer\Backuplay\Artisan\CreateBackup;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Process\Process;

class BackupCreateFailedScript extends Event
{
    use SerializesModels;

    /**
     * @var \Gummibeer\Backuplay\Artisan\CreateBackup
     */
    public $command;
    /**
     * @var string
     */
    public $script;
    /**
     * @var \Symfony\Component\Process\Process
     */
    public $process;

    public function __construct(CreateBackup $command, $script, Process $process)
    {
        $this->command = $command;
        $this->script = $script;
        $this->process = $process;
    }
}