<form class="form-add-locale" method="POST" role="form" action="{{ route('locale.store') }}">
    @csrf
    <div class="form-group">
        <p>{{ __('Enter new locale key:') }}</p>
        <div class="row">
            <div class="col-sm-3">
                <input type="text" name="new-locale" class="form-control" />
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary btn-block"  data-disable-with="Adding..">{{ __('Add new locale') }}</button>
            </div>
        </div>
    </div>
</form>
<h5>{{ __('Supported locales') }}</h5>
<table class="table table-bordered table-hover">
    <thead>
    <tr><th>{{ __('Locale') }}</th><th>{{ __('Action') }}</th></tr>
    </thead>
    <tbody>
    @foreach($locales as $locale)
        <tr>
            <td>{{ $locale }}</td>
            <td>
                <form action="{{ route('locale.delete') }}" method="post">
                    @csrf
                    <input type="hidden" name="locale" value="{{ $locale }}">
                    <button class="btn btn-sm btn-outline-danger py-0" type="submit">{{ __('Delete') }}</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
