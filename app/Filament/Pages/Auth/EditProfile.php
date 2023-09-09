<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Page;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Auth\EditProfile as BaseEditProfile;
use App\Filament\Pages\Auth\EditProfile;


class EditProfile extends BaseEditProfile
{
/*     protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.auth.edit-profile';
 */
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                /* TextInput::make('username')
                    ->required()
                    ->maxLength(255), */
                $this->getNameFormComponent(),
                $this->getEmailFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
            ]);
    }




}
