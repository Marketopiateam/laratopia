<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('application.title') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('cruds.application.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" required wire:model.defer="application.title">
        <div class="validation-message">
            {{ $errors->first('application.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.application.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('application.details') ? 'invalid' : '' }}">
        <label class="form-label" for="details">{{ trans('cruds.application.fields.details') }}</label>
        <textarea class="form-control" name="details" id="details" wire:model.defer="application.details" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('application.details') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.application.fields.details_helper') }}
        </div>
    </div>
    

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.applications.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>