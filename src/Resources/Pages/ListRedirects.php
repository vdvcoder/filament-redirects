<?php

namespace JamesHarley\FilamentRedirects\Resources\Pages;

use Filament\Resources\Pages\ListRecords;
use JamesHarley\FilamentRedirects\Resources\RedirectResource\RedirectResource;

class ListRedirects extends ListRecords
{
    protected static string $resource = RedirectResource::class;
}
