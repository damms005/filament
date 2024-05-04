<?php

namespace Filament\Resources\Resource\Concerns;

use Filament\Resources\ParentResourceRegistration;

trait BelongsToParent
{
    public static function getParentResource(): string | ParentResourceRegistration | null
    {
        return null;
    }

    public static function asParent(): ParentResourceRegistration
    {
        return new ParentResourceRegistration(static::class);
    }

    public static function getParentResourceRegistration(): ?ParentResourceRegistration
    {
        $parentResource = static::getParentResource();

        if (is_string($parentResource)) {
            $parentResource = $parentResource::asParent();
        }

        return $parentResource;
    }
}
