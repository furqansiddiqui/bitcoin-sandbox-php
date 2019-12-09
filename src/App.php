<?php
declare(strict_types=1);

/**
 * Class App
 */
class App extends \Comely\App\AppKernel
{
    public const NAME = "Bitcoin Sandbox";

    public const DIR_CONFIG = 'src/config';
    public const DIR_STORAGE = 'src/storage';
    public const DIR_UPLOADS = 'src/storage/uploads';
    public const DIR_LANGS = 'src/langs';
    public const DIR_TEMPLATES = 'src/templates';
    public const DIR_CACHE = 'tmp/cache';
    public const DIR_COMPILER = 'tmp/knit';
    public const DIR_LOGS = 'tmp/logs';
    public const DIR_SESSIONS = 'tmp/sessions';

    /**
     * @return array
     */
    public function getNetworksList(): array
    {
        return \FurqanSiddiqui\Bitcoin\Networks\Networks::LIST;
    }
}