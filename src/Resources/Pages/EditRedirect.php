<?php

namespace JamesHarley\FilamentRedirects\Resources\Pages;

use Filament\Resources\Pages\EditRecord;
use JamesHarley\FilamentRedirects\Resources\RedirectResource\RedirectResource;

class EditRedirect extends EditRecord
{
    protected static string $resource = RedirectResource::class;
}
