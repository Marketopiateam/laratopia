<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('studio.title') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('cruds.studio.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" required wire:model.defer="studio.title">
        <div class="validation-message">
            {{ $errors->first('studio.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.studio.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('studio.description') ? 'invalid' : '' }}">
        <label class="form-label" for="description">{{ trans('cruds.studio.fields.description') }}</label>
        <textarea class="form-control" name="description" id="description" wire:model.defer="studio.description" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('studio.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.studio.fields.description_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('studio.date') ? 'invalid' : '' }}">
        <label class="form-label" for="date">{{ trans('cruds.studio.fields.date') }}</label>
        <x-date-picker class="form-control" wire:model="studio.date" id="date" name="date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('studio.date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.studio.fields.date_helper') }}
        </div>
    </div>
    
    <div class="form-group {{ $errors->has('studio.status') ? 'invalid' : '' }}">
        <label class="form-label" for="status">{{ trans('cruds.studio.fields.status') }}</label>
        <input class="form-control" type="text" name="status" id="status" wire:model.defer="studio.status">
        <div class="validation-message">
            {{ $errors->first('studio.status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.studio.fields.status_helper') }}
        </div>
    </div>
    

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.studios.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
