<div class="row">
    <div class="col-sm-2">
        <span class="btn btn-info enable-auto-translate-group">Use Auto Translate</span>
    </div>
</div>
<form class="form-add-locale autotranslate-block-group hidden" method="POST" role="form" action="<?php echo action('\Modules\Language\Http\Controllers\LanguagesController@postTranslateMissing') ?>">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="base-locale">Base Locale for Auto Translations</label>
                <select name="base-locale" id="base-locale" class="form-control">
                    @foreach ($locales as $locale)
                        <option value="<?= $locale ?>"><?= $locale ?></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="new-locale">Enter target locale key</label>
                <input type="text" name="new-locale" class="form-control" id="new-locale" placeholder="Enter target locale key" />
            </div>
            <?php if(!config('laravel_google_translate.google_translate_api_key')): ?>
            <p>
                <code>If you would like to use Google Translate API, install tanmuhittin/laravel-google-translate and enter your Google Translate API key to config file laravel_google_translate</code>
            </p>
            <?php endif; ?>
            <div class="form-group">
                <input type="hidden" name="with-translations" value="1">
                <input type="hidden" name="file" value="<?= $group ?>">
                <button type="submit" class="btn btn-default btn-block"  data-disable-with="Adding..">Auto translate missing translations</button>
            </div>
        </div>
    </div>
</form>
