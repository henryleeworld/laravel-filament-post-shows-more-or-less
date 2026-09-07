<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label(__('Title'))
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->required(),
                Textarea::make('body')
                    ->label(__('Body'))
                    ->maxLength(1024)
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
