<?php


namespace Ling\Explorer\Log;


interface ExplorerLogInterface
{
    public function log($msg, $level = null);
}