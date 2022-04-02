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
