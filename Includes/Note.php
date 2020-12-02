<?php

/**
 * Annotate Image note
 */

declare(strict_types=1);

namespace Annotate\Includes;

class Note
{
    private int $noteID;
    private float $posX;
    private float $posY;
    private int $precision;
    private int $contentID;
    private string $contentText;

    public function __construct($noteID, $posX, $posY, $contentID = null, $contentText = null)
    {
        $this->noteID = $noteID;
        $this->posX = $posX;
        $this->posY = $posY;
        if ($contentID) {
            $this->contentID = $contentID;
        }
        if ($contentText) {
            $this->contentText = $contentText;
        }
    }

    public function renderNote()
    {
        //$text = $this->contentText;
        $html = "<div class='annotateNote' id='$this->noteID'";
        $html .= "style='left: $this->posX%;top: $this->posY%;'>$this->contentText</div>";
        return 'tester' . $html;
    }
}
