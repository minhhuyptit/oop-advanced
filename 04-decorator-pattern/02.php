<?php
interface Logger{
    public function log($msg);
}

abstract class LoggerDecorator implements Logger{
    protected $logger;
    
    public function __construct(Logger $logger){
        $this->logger = $logger;
    }

    abstract public function log($msg);

}

class FileLogger implements Logger{
    public function log($msg){
        echo "<h3>Error on File: {$msg}</h3>";
    }
}

class EmailLogger extends LoggerDecorator{
    public function log($msg){
        $this->logger->log($msg);
        echo "<h3>Error on Email: {$msg}</h3>";
    }
}

class DatabaseLogger extends LoggerDecorator{
    public function log($msg){
        $this->logger->log($msg);
        echo "<h3>Error on Database: {$msg}</h3>";
    }
}

$log = new FileLogger();
$log = new EmailLogger($log);
$log = new DatabaseLogger($log);
$log->log('saving');

?>