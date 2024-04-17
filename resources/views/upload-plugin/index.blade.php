@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    <div>
        <x-core::alert :title="__('If you have a plugin in a .zip format, you may install or update it by uploading it here.')"/>
        <x-core::form
            method="post"
            class="form-upload-plugin bg-white"
            files="true"
            data-bb-toggle="upload-plugin-form"
            :url="route('plugin-manager.upload-plugin.store')"
            style="padding: 30px; border: 1px solid #c3c4c7"
        >
            <div class="d-flex gap-4 align-items-start">
                <div>
                    <x-core::form.text-input name="file" accept=".zip" type="file" wrapper-class-default="position-relative"/>
                </div>
                <x-core::button type="submit" color="primary">
                    {{ __('Install Now') }}
                </x-core::button>
            </div>
        </x-core::form>
    </div>
@endsection
