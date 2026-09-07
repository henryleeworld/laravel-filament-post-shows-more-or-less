<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Filament\Infolists\Components\PostBody;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PostInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title')
                    ->label(__('Title'))
                    ->columnSpanFull(),
                PostBody::make('body')
                    ->label(__('Body'))
                    ->maxLength(50)
                    ->columnSpanFull(),
            ]);
    }
}
