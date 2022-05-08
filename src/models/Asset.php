<?php

namespace presseddigital\linkit\models;

use craft\elements\Asset as CraftAsset;

use presseddigital\linkit\base\ElementLink;

class Asset extends ElementLink
{
    // Static
    // =========================================================================

    public static function elementType()
    {
        return CraftAsset::class;
    }

    // Public Methods
    // =========================================================================

    public function getText(): string
    {
        return $this->getCustomOrDefaultText() ?? $this->getAsset()->filename ?? $this->getUrl() ?? '';
    }

    public function getAsset()
    {
        return $this->getElement();
    }
}

class_alias(Asset::class, \fruitstudios\linkit\models\Asset::class);
