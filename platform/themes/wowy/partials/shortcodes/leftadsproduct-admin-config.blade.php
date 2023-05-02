
    <div class="form-group">
        <label class="control-label">{{ __('Icon') }}</label>
        {!! Form::mediaImage('icon', Arr::get($attributes, 'icon' . $i)) !!}
    </div>

    <div class="form-group">
        <label class="control-label">{{ __('Title') }}</label>
        <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
    </div>

    <div class="form-group">
        <label class="control-label">{{ __('Subtitle') }}</label>
        <input type="text" name="subtitle" value="{{ Arr::get($attributes, 'subtitle') }}" class="form-control"
               placeholder="{{ __('Subtitle') }}">
    </div>
