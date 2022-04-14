<div class="card shadow">
    <div class="card-body">
        <h5 class="mb-0">{{ __('Recent Activity') }}
        @if(setting('activity_log_enable'))
            <span class="badge badge-success">{{ __('Active') }}</span>
        @else
            <span class="badge badge-secondary">{{ __('Disabled') }}</span>
        @endif
        </h5>
        <p>Last activities with users.</p>
        <table class="table border bg-white table-sm">
            <thead>
            <tr>
                <th>User</th>
                <th>Description</th>
                <th>Browser</th>
                <th>OS</th>
                <th>IP</th>
                <th>Time</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($activities as $activity)
            <tr>
                <td>
                    <a href="{{ route('users') }}"><small> {{ $activity->causer->name }} </small></a>
                </td>
                <td>
                    @if($activity->event == 'signin')
                        <span class="badge badge-success">{{ $activity->description }}</span>
                    @elseif($activity->event == 'signout')
                        <span class="badge badge-secondary">{{ $activity->description }}</span>
                    @else
                        <span class="badge badge-primary">{{ $activity->description }}</span>
                    @endif
                </td>
                <th scope="col">
                    <i class="fe fe-globe fe-12 text-muted mr-2"></i>
                    {{ $activity->getExtraProperty('browser') }}
                </th>
                <td>{{ $activity->getExtraProperty('os') }}</td>
                <td>{{ $activity->getExtraProperty('ip') }}</td>
                <td>{{ $activity->created_at->format('M d, Y') }}</td>
                <td><a hreff="#" wire:click="delete({{ $activity->id }})" class="text-muted"><i class="fe fe-x"></i></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $activities->links() }}
    </div>
</div>
