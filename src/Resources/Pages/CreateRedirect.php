<?php

namespace JamesHarley\FilamentRedirects\Resources\Pages;

use Filament\Resources\Pages\CreateRecord;
use JamesHarley\FilamentRedirects\Resources\RedirectResource\RedirectResource;

class CreateRedirect extends CreateRecord
{
    protected static string $resource = RedirectResource::class;
}
