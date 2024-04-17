@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    <x-core::alert :title="trans('plugins/plugin-manager::plugin-manager.plugin_upload.description')"/>
    <x-core::card>
        <x-core::card.header>
            <div class="card-title">{{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.title') }}</div>
        </x-core::card.header>
        <x-core::card.body>
            <x-core::form
                method="post"
                files="true"
                :url="route('plugin-manager.upload-plugin.store')"
            >
                <x-core::form.text-input
                    style="width: 50%"
                    name="file"
                    accept=".zip"
                    type="file"
                    :helperText="trans('plugins/plugin-manager::plugin-manager.plugin_upload.accept_mines', ['mines' => 'zip'])"
                />
                <x-core::button type="submit" color="primary">
                    {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.install_now') }}
                </x-core::button>
            </x-core::form>
        </x-core::card.body>
    </x-core::card>
@endsection
