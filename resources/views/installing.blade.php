@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    <x-core::card data-bb-toggle="upload-plugin">
        <x-core::card.body>
            <x-core::alert :title="trans('plugins/plugin-manager::plugin-manager.plugin_upload.installing_plugin_from_file', ['file' => $fileName])"/>

            <div class="mb-3">
                <pre style="line-height: 1">
                    <p class="mb-0">{{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.unpacking_the_package') }}</p>
                    <p class="mb-0">{{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.install_the_plugin') }}</p>
                    @if (count($fails) > 0)
                        @foreach ($fails as $messages)
                            <p class="text-danger mb-0">{{ $messages }}</p>
                        @endforeach
                    @else
                        <p class="text-success mb-0">{{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_installed_successfully') }}</p>
                    @endif
                </pre>
                @if (count($fails))
                    <a class="btn mt-2" href="{{ route('plugin-manager.upload-plugin.index') }}">
                        {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.back') }}
                    </a>
                @endif
            </div>


        @if(! count($fails))
                <div class="plugin-information mb-3 row">
                    <x-core::card class="col-lg-6">
                        <x-core::card.header>
                            <div class="card-title">{{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_information.title') }}</div>
                        </x-core::card.header>
                        <div class="table-responsive">
                            <x-core::table class="table-vcenter card-table">
                                <x-core::table.body>
                                    <x-core::table.body.row>
                                        <x-core::table.body.cell>
                                            {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_information.id') }}
                                        </x-core::table.body.cell>
                                        <x-core::table.body.cell>
                                            {{ Arr::get($pluginContent, 'id') }}
                                        </x-core::table.body.cell>
                                    </x-core::table.body.row>
                                    <x-core::table.body.row>
                                        <x-core::table.body.cell>
                                            {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_information.name') }}
                                        </x-core::table.body.cell>
                                        <x-core::table.body.cell>
                                            {{ Arr::get($pluginContent, 'name') }}
                                        </x-core::table.body.cell>
                                    </x-core::table.body.row>
                                    <x-core::table.body.row>
                                        <x-core::table.body.cell>
                                            {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_information.description') }}
                                        </x-core::table.body.cell>
                                        <x-core::table.body.cell>
                                            {{ Arr::get($pluginContent, 'description') }}
                                        </x-core::table.body.cell>
                                    </x-core::table.body.row>
                                    <x-core::table.body.row>
                                        <x-core::table.body.cell>
                                            {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_information.author') }}
                                        </x-core::table.body.cell>
                                        <x-core::table.body.cell>
                                            {{ Arr::get($pluginContent, 'author') }}
                                        </x-core::table.body.cell>
                                    </x-core::table.body.row>
                                    <x-core::table.body.row>
                                        <x-core::table.body.cell>
                                            {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_information.version') }}
                                        </x-core::table.body.cell>
                                        <x-core::table.body.cell>
                                            {{ Arr::get($pluginContent, 'version') }}
                                        </x-core::table.body.cell>
                                    </x-core::table.body.row>
                                    <x-core::table.body.row>
                                        <x-core::table.body.cell>
                                            {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_information.minimum_core_version') }}
                                        </x-core::table.body.cell>
                                        <x-core::table.body.cell>
                                            {{ Arr::get($pluginContent, 'minimum_core_version') }}
                                        </x-core::table.body.cell>
                                    </x-core::table.body.row>
                                </x-core::table.body>
                            </x-core::table>
                        </div>
                    </x-core::card>
                </div>

                <x-core::form
                    method="post"
                    :url="route('plugin-manager.activate-plugin')"
                >
                    <input type="hidden" name="name" value="{{ $pluginName }}"/>
                    <x-core::button type="submit" class="btn btn-primary">
                        {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.activate_plugin') }}
                    </x-core::button>
                </x-core::form>
            @endif
        </x-core::card.body>
    </x-core::card>
@endsection
