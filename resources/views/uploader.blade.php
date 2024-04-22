@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    <x-core::alert type="warning">
        {!! BaseHelper::clean(trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.description', ['link' => Html::link('https://marketplace.botble.com/products', 'Botble Marketplace', ['target' => '_blank'])])) !!}
    </x-core::alert>

    @if(session()->has('isUpdate'))
        @include('plugins/fob-plugin-manager::partials.updater')
    @elseif(session()->has('isInstall'))
        @include('plugins/fob-plugin-manager::partials.installer')
    @else
        <x-core::form method="post" files="true" :url="route('plugin-manager.upload-plugin.store')">
            <x-core::card>
                <x-core::card.header>
                    <x-core::card.title>{{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.title') }}</x-core::card.title>
                </x-core::card.header>
                <x-core::card.body>
                    <x-core::form.text-input
                        type="file"
                        name="file"
                        wrapper-class="mb-0"
                        accept="application/zip"
                        :helperText="trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.input_file_description')"
                    />
                </x-core::card.body>
                <x-core::card.footer>
                    <x-core::button type="submit" color="primary">
                        {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.upload_and_install') }}
                    </x-core::button>
                </x-core::card.footer>
            </x-core::card>
        </x-core::form>
    @endif
@endsection
