<?php

trait Streamable
{
    protected $streamable;

    public function setStreamable($isStreamable)
    {
        if ($isStreamable == true) {
            $this->streamable = $isStreamable;
        } else {
            echo "Il contenuto non e' selezionabile per lo streaming";
        }
    }
}

?>