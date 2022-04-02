<h4>Total: {{ $numTranslations }}, changed: {{ $numChanged }}</h4>
<table class="table">
    <thead>
    <tr>
        <th width="15%">Key</th>
        @foreach ($locales as $locale)
            <th>{{ $locale }}</th>
        @endforeach
        <th> Action </th>
    </tr>
    </thead>
    <tbody>

    @foreach ($translations as $key => $translation)
        <form action="" class="langForm">
            <input type="hidden" name="group" value="{{ $group }}">
            @csrf
            <tr id="<?php echo htmlentities($key, ENT_QUOTES, 'UTF-8', false) ?>">
                <td><?php echo htmlentities($key, ENT_QUOTES, 'UTF-8', false) ?></td>
                @foreach ($locales as $locale)
                    <?php $t = isset($translation[$locale]) ? $translation[$locale] : null ?>
                    <td>
                        <input type="hidden" name="name[]" value="{!! $locale . "|" . htmlentities($key, ENT_QUOTES, 'UTF-8', false)  !!}">
                        <input class="form-control" type="text" name="value[]" value="{!! $t ? htmlentities($t->value, ENT_QUOTES, 'UTF-8', false) : '' !!}">
                    </td>
                @endforeach
                <td>
                    <button class="btn btn-primary btn-sm" type="submit">Update</button>
                    @if($deleteEnabled)
                        <a href="<?php echo action('\Modules\Language\Http\Controllers\LanguagesController@postDelete', [$group, $key]) ?>"
                           class="delete-key"
                           data-confirm="Are you sure you want to delete the translations for '<?php echo htmlentities($key, ENT_QUOTES, 'UTF-8', false) ?>?"><span
                                class="glyphicon glyphicon-trash"></span></a>
                    @endif
                </td>
            </tr>
        </form>
    @endforeach
    </tbody>
</table>
