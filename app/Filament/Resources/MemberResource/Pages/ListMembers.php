<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Filament\Resources\MemberResource;
use App\Imports\ImportMember;
use App\Models\Member;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\View\View;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\Actions\ImportField;
use Maatwebsite\Excel\Facades\Excel;

class ListMembers extends ListRecords
{
    protected static string $resource = MemberResource::class;

    protected function getHeaderActions(): array
    {
        return [

            Actions\CreateAction::make(),
         
        ];
    }
     public function getHeader(): ?View
    {
        $data = Actions\CreateAction::make();
        return view('filament.custom.upload', compact('data')); 
    }  
    public $file = '';
    public function save(){
            if($this->file != ''){
                Excel::import(new ImportMember, $this->file);
            }
        /*     Member::create([
                  //ibutang mo didi brod an sa database names  
                  'members_id' => '0545454',
                'full_name' => 'Ariel Lagata',
                'Address' => 'Gubat, Sorsogon',
                'Cellphone_num' => '09457812831',
                'Gender' => 'male',
                'Geograph_group' => 'gubat',
                'Date_of_birth' => '08/08/1996',
                'Age' => '27',
                'civil_status' => 'single',
                'bussi_emp_name' => 'n/a',
                
            ]); */
    }
  
}
