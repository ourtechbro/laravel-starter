<?php

namespace Modules\ActivityLog\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Activitylog\Models\Activity as ActivityModel;

class Activity extends Component
{
    use WithPagination;

    public $per_page = 10;

    public function render()
    {
        $activities = ActivityModel::with('causer')
            ->latest()
            ->paginate($this->per_page, ['*'], 'general');

        return view('activitylog::livewire.activity', [
            'activities' => $activities
        ]);
    }

    public function delete($logId)
    {
        ActivityModel::find($logId)->delete();

        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => __('Log removed successfully!')]);
    }

    public function paginationView()
    {
        return 'admin.pagination';
    }
}
