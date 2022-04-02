<p>Warning, translations are not visible until they are exported back to the app/lang file, using <code>php artisan translation:export</code> command or publish button.</p>
<div class="alert alert-success success-import" style="display:none;">
    <p>Done importing, processed <strong class="counter">N</strong> items! Reload this page to refresh the groups!</p>
</div>
<div class="alert alert-success success-find" style="display:none;">
    <p>Done searching for translations, found <strong class="counter">N</strong> items!</p>
</div>
<div class="alert alert-success success-publish" style="display:none;">
    <p>Done publishing the translations for group '<?php echo $group ?>'!</p>
</div>
<div class="alert alert-success success-publish-all" style="display:none;">
    <p>Done publishing the translations for all group!</p>
</div>
@if(Session::has('successPublish'))
    <div class="alert alert-info">
        <?php echo Session::get('successPublish'); ?>
    </div>
@endif
<p>
    @if(!isset($group))
        <form class="form-import" method="POST" action="<?php echo action('\Modules\Language\Http\Controllers\LanguagesController@postImport') ?>" data-remote="true" role="form">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-3">
                        <select name="replace" class="form-control">
                            <option value="0">Append new translations</option>
                            <option value="1">Replace existing translations</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-block"  data-disable-with="Loading..">Import groups</button>
                    </div>
                </div>
            </div>
        </form>
        <form class="form-find" method="POST" action="<?php echo action('\Modules\Language\Http\Controllers\LanguagesController@postFind') ?>" data-remote="true" role="form" data-confirm="Are you sure you want to scan you app folder? All found translation keys will be added to the database.">
            <div class="form-group">
                @csrf
                <button type="submit" class="btn btn-info" data-disable-with="Searching.." >Find translations in files</button>
            </div>
        </form>
    @endif
    @if(isset($group))
        <form class="form-inline form-publish" method="POST" action="<?php echo action('\Modules\Language\Http\Controllers\LanguagesController@postPublish', $group) ?>" data-remote="true" role="form" data-confirm="Are you sure you want to publish the translations group '<?php echo $group ?>? This will overwrite existing language files.">
            @csrf
            <button type="submit" class="btn btn-info" data-disable-with="Publishing.." >Publish translations</button>
            <a href="<?= action('\Modules\Language\Http\Controllers\LanguagesController@getIndex') ?>" class="btn btn-default">Back</a>
        </form>
    @endif
</p>
