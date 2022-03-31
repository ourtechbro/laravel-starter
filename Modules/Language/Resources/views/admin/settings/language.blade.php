@extends('layouts.app')

@section('title')
    Language Settings
@endsection
@section('styles')
    <style>
        a.status-1{
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    @include('ls-language::admin.settings.paritals.locale')
    <hr>
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
    <form role="form" method="POST" action="<?php echo action('\Modules\Language\Http\Controllers\LanguagesController@postAddGroup') ?>">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="form-group">
            <p>Choose a group to display the group translations. If no groups are visisble, make sure you have run the migrations and imported the translations.</p>
            <select name="group" id="group" class="form-control group-select">
                @foreach($groups as $key => $value)
                <option value="<?php echo $key ?>"<?php echo $key == $group ? ' selected':'' ?>><?php echo $value ?></option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Enter a new group name and start edit translations in that group</label>
            <input type="text" class="form-control" name="new-group" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="add-group" value="Add and edit keys" />
        </div>
    </form>
    <?php if($group): ?>
    <form action="<?php echo action('\Modules\Language\Http\Controllers\LanguagesController@postAdd', array($group)) ?>" method="POST"  role="form">
        @csrf
        <div class="form-group">
            <label>Add new keys to this group</label>
            <textarea class="form-control" rows="3" name="keys" placeholder="Add 1 key per line, without the group prefix"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Add keys" class="btn btn-primary">
        </div>
    </form>
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
    <hr>
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
    <?php else: ?>
    <fieldset>
        <legend>Export all translations</legend>
        <form class="form-inline form-publish-all" method="POST" action="<?php echo action('\Modules\Language\Http\Controllers\LanguagesController@postPublish', '*') ?>" data-remote="true" role="form" data-confirm="Are you sure you want to publish all translations group? This will overwrite existing language files.">
            @csrf
            <button type="submit" class="btn btn-primary" data-disable-with="Publishing.." >Publish all</button>
        </form>
    </fieldset>

    <?php endif; ?>
@endsection
@section('scripts')
    <script>//https://github.com/rails/jquery-ujs/blob/master/src/rails.js
        (function(e,t){if(e.rails!==t){e.error("jquery-ujs has already been loaded!")}var n;var r=e(document);e.rails=n={linkClickSelector:"a[data-confirm], a[data-method], a[data-remote], a[data-disable-with]",buttonClickSelector:"button[data-remote], button[data-confirm]",inputChangeSelector:"select[data-remote], input[data-remote], textarea[data-remote]",formSubmitSelector:"form",formInputClickSelector:"form input[type=submit], form input[type=image], form button[type=submit], form button:not([type])",disableSelector:"input[data-disable-with], button[data-disable-with], textarea[data-disable-with]",enableSelector:"input[data-disable-with]:disabled, button[data-disable-with]:disabled, textarea[data-disable-with]:disabled",requiredInputSelector:"input[name][required]:not([disabled]),textarea[name][required]:not([disabled])",fileInputSelector:"input[type=file]",linkDisableSelector:"a[data-disable-with]",buttonDisableSelector:"button[data-remote][data-disable-with]",CSRFProtection:function(t){var n=e('meta[name="csrf-token"]').attr("content");if(n)t.setRequestHeader("X-CSRF-Token",n)},refreshCSRFTokens:function(){var t=e("meta[name=csrf-token]").attr("content");var n=e("meta[name=csrf-param]").attr("content");e('form input[name="'+n+'"]').val(t)},fire:function(t,n,r){var i=e.Event(n);t.trigger(i,r);return i.result!==false},confirm:function(e){return confirm(e)},ajax:function(t){return e.ajax(t)},href:function(e){return e.attr("href")},handleRemote:function(r){var i,s,o,u,a,f,l,c;if(n.fire(r,"ajax:before")){u=r.data("cross-domain");a=u===t?null:u;f=r.data("with-credentials")||null;l=r.data("type")||e.ajaxSettings&&e.ajaxSettings.dataType;if(r.is("form")){i=r.attr("method");s=r.attr("action");o=r.serializeArray();var h=r.data("ujs:submit-button");if(h){o.push(h);r.data("ujs:submit-button",null)}}else if(r.is(n.inputChangeSelector)){i=r.data("method");s=r.data("url");o=r.serialize();if(r.data("params"))o=o+"&"+r.data("params")}else if(r.is(n.buttonClickSelector)){i=r.data("method")||"get";s=r.data("url");o=r.serialize();if(r.data("params"))o=o+"&"+r.data("params")}else{i=r.data("method");s=n.href(r);o=r.data("params")||null}c={type:i||"GET",data:o,dataType:l,beforeSend:function(e,i){if(i.dataType===t){e.setRequestHeader("accept","*/*;q=0.5, "+i.accepts.script)}if(n.fire(r,"ajax:beforeSend",[e,i])){r.trigger("ajax:send",e)}else{return false}},success:function(e,t,n){r.trigger("ajax:success",[e,t,n])},complete:function(e,t){r.trigger("ajax:complete",[e,t])},error:function(e,t,n){r.trigger("ajax:error",[e,t,n])},crossDomain:a};if(f){c.xhrFields={withCredentials:f}}if(s){c.url=s}return n.ajax(c)}else{return false}},handleMethod:function(r){var i=n.href(r),s=r.data("method"),o=r.attr("target"),u=e("meta[name=csrf-token]").attr("content"),a=e("meta[name=csrf-param]").attr("content"),f=e('<form method="post" action="'+i+'"></form>'),l='<input name="_method" value="'+s+'" type="hidden" />';if(a!==t&&u!==t){l+='<input name="'+a+'" value="'+u+'" type="hidden" />'}if(o){f.attr("target",o)}f.hide().append(l).appendTo("body");f.submit()},formElements:function(t,n){return t.is("form")?e(t[0].elements).filter(n):t.find(n)},disableFormElements:function(t){n.formElements(t,n.disableSelector).each(function(){n.disableFormElement(e(this))})},disableFormElement:function(e){var t=e.is("button")?"html":"val";e.data("ujs:enable-with",e[t]());e[t](e.data("disable-with"));e.prop("disabled",true)},enableFormElements:function(t){n.formElements(t,n.enableSelector).each(function(){n.enableFormElement(e(this))})},enableFormElement:function(e){var t=e.is("button")?"html":"val";if(e.data("ujs:enable-with"))e[t](e.data("ujs:enable-with"));e.prop("disabled",false)},allowAction:function(e){var t=e.data("confirm"),r=false,i;if(!t){return true}if(n.fire(e,"confirm")){r=n.confirm(t);i=n.fire(e,"confirm:complete",[r])}return r&&i},blankInputs:function(t,n,r){var i=e(),s,o,u=n||"input,textarea",a=t.find(u);a.each(function(){s=e(this);o=s.is("input[type=checkbox],input[type=radio]")?s.is(":checked"):s.val();if(!o===!r){if(s.is("input[type=radio]")&&a.filter('input[type=radio]:checked[name="'+s.attr("name")+'"]').length){return true}i=i.add(s)}});return i.length?i:false},nonBlankInputs:function(e,t){return n.blankInputs(e,t,true)},stopEverything:function(t){e(t.target).trigger("ujs:everythingStopped");t.stopImmediatePropagation();return false},disableElement:function(e){e.data("ujs:enable-with",e.html());e.html(e.data("disable-with"));e.bind("click.railsDisable",function(e){return n.stopEverything(e)})},enableElement:function(e){if(e.data("ujs:enable-with")!==t){e.html(e.data("ujs:enable-with"));e.removeData("ujs:enable-with")}e.unbind("click.railsDisable")}};if(n.fire(r,"rails:attachBindings")){e.ajaxPrefilter(function(e,t,r){if(!e.crossDomain){n.CSRFProtection(r)}});r.delegate(n.linkDisableSelector,"ajax:complete",function(){n.enableElement(e(this))});r.delegate(n.buttonDisableSelector,"ajax:complete",function(){n.enableFormElement(e(this))});r.delegate(n.linkClickSelector,"click.rails",function(r){var i=e(this),s=i.data("method"),o=i.data("params"),u=r.metaKey||r.ctrlKey;if(!n.allowAction(i))return n.stopEverything(r);if(!u&&i.is(n.linkDisableSelector))n.disableElement(i);if(i.data("remote")!==t){if(u&&(!s||s==="GET")&&!o){return true}var a=n.handleRemote(i);if(a===false){n.enableElement(i)}else{a.error(function(){n.enableElement(i)})}return false}else if(i.data("method")){n.handleMethod(i);return false}});r.delegate(n.buttonClickSelector,"click.rails",function(t){var r=e(this);if(!n.allowAction(r))return n.stopEverything(t);if(r.is(n.buttonDisableSelector))n.disableFormElement(r);var i=n.handleRemote(r);if(i===false){n.enableFormElement(r)}else{i.error(function(){n.enableFormElement(r)})}return false});r.delegate(n.inputChangeSelector,"change.rails",function(t){var r=e(this);if(!n.allowAction(r))return n.stopEverything(t);n.handleRemote(r);return false});r.delegate(n.formSubmitSelector,"submit.rails",function(r){var i=e(this),s=i.data("remote")!==t,o,u;if(!n.allowAction(i))return n.stopEverything(r);if(i.attr("novalidate")==t){o=n.blankInputs(i,n.requiredInputSelector);if(o&&n.fire(i,"ajax:aborted:required",[o])){return n.stopEverything(r)}}if(s){u=n.nonBlankInputs(i,n.fileInputSelector);if(u){setTimeout(function(){n.disableFormElements(i)},13);var a=n.fire(i,"ajax:aborted:file",[u]);if(!a){setTimeout(function(){n.enableFormElements(i)},13)}return a}n.handleRemote(i);return false}else{setTimeout(function(){n.disableFormElements(i)},13)}});r.delegate(n.formInputClickSelector,"click.rails",function(t){var r=e(this);if(!n.allowAction(r))return n.stopEverything(t);var i=r.attr("name"),s=i?{name:i,value:r.val()}:null;r.closest("form").data("ujs:submit-button",s)});r.delegate(n.formSubmitSelector,"ajax:send.rails",function(t){if(this==t.target)n.disableFormElements(e(this))});r.delegate(n.formSubmitSelector,"ajax:complete.rails",function(t){if(this==t.target)n.enableFormElements(e(this))});e(function(){n.refreshCSRFTokens()})}})(jQuery)
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <script>
        $(document).ready(function($){
            $.ajaxSetup({
                beforeSend: function(xhr, settings) {
                    settings.data += "&_token=<?php echo csrf_token() ?>";
                }
            });

            $('.group-select').on('change', function(){
                var group = $(this).val();
                if (group) {
                    window.location.href = '<?php echo action('\Modules\Language\Http\Controllers\LanguagesController@getView') ?>/'+$(this).val();
                } else {
                    window.location.href = '<?php echo action('\Modules\Language\Http\Controllers\LanguagesController@getIndex') ?>';
                }
            });

            $("a.delete-key").on('confirm:complete',function(event,result){
                if(result)
                {
                    var row = $(this).closest('tr');
                    var url = $(this).attr('href');
                    var id = row.attr('id');
                    $.post( url, {id: id}, function(){
                        row.remove();
                    } );
                }
                return false;
            });

            $('.form-import').on('ajax:success', function (e, data) {
                $('div.success-import strong.counter').text(data.counter);
                $('div.success-import').slideDown();
                window.location.reload();
            });

            $('.form-find').on('ajax:success', function (e, data) {
                $('div.success-find strong.counter').text(data.counter);
                $('div.success-find').slideDown();
                window.location.reload();
            });

            $('.form-publish').on('ajax:success', function (e, data) {
                $('div.success-publish').slideDown();
            });

            $('.form-publish-all').on('ajax:success', function (e, data) {
                $('div.success-publish-all').slideDown();
            });
            $('.enable-auto-translate-group').click(function (event) {
                event.preventDefault();
                $('.autotranslate-block-group').removeClass('hidden');
                $('.enable-auto-translate-group').addClass('hidden');
            })
            $('#base-locale').change(function (event) {
                console.log($(this).val());
                $.cookie('base_locale', $(this).val());
            })
            if (typeof $.cookie('base_locale') !== 'undefined') {
                $('#base-locale').val($.cookie('base_locale'));
            }
            $(".langForm").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('lang.update') }}",
                    type: 'post',
                    dataType: 'application/json',
                    data: $(this).serialize(),
                    success: function (data) {
                        console.log(data);
                    }
                });
            });
        })
    </script>
@endsection
