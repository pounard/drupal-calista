<?php

namespace MakinaCorpus\Dashboard\Tests\Mock;

/**
 * Defined so that we may use the default page template for testing
 */
class IntItem
{
    public function __construct($value)
    {
        $this->id = $this->title = $this->name = $value;
        $this->created = $this->changed = (new \DateTime())->format('Y-m-d H:i:s');
    }

    public $type = "Integer";
    public $id;
    public $title;
    public $isPublished = true;
    public $name;
    public $changed;
    public $created;
}
