<div class="card-body">
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input wire:model="name" class="form-control" />
            </div>
        </div>

        <div class="form-group row">
            <label for="slug" class="col-md-4 col-form-label text-md-right">{{ __('Slug') }}</label>

            <div class="col-md-6">
                <input wire:model="slug" class="form-control" />
            </div>
        </div>
</div>
