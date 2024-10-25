<?php

namespace App\Livewire;

use App\Livewire\Forms\OrganizationForm;
use App\Models\Organization;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class OrganizationsCreate extends Component
{
    public OrganizationForm $form;
    public $organization;
    public $feedback = '';


    public function save()
    {
        $this->form->create();


        return $this->redirect('/organizations', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.organizations-create');
    }
}
