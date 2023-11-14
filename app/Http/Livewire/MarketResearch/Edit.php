<?php

namespace App\Http\Livewire\MarketResearch;

use App\Models\MarketResearch;
use App\Models\Team;
use Livewire\Component;

class Edit extends Component
{
    public array $listsForFields = [];

    public MarketResearch $marketResearch;

    public function mount(MarketResearch $marketResearch)
    {
        $this->marketResearch = $marketResearch;
    }

    public function render()
    {
        return view('livewire.market-research.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->marketResearch->save();

        return redirect()->route('admin.market-researchs.index');
    }

    protected function rules(): array
    {
        return [
            'marketResearch.title' => [
                'string',
                'nullable',
            ],
            'marketResearch.details' => [
                'string',
                'nullable',
            ],
            
        ];
    }

    
}
