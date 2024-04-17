@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    @php
        $isSameAsPluginID = $oldPluginContent['id'] === $pluginContent['id'];
        $isAvailableUpdate = $isSameAsPluginID && version_compare($pluginContent['version'], $oldPluginContent['version'], '>');
    @endphp

    <x-core::card data-bb-toggle="upload-plugin">
        <x-core::card.body>
            <x-core::alert :title="trans('plugins/plugin-manager::plugin-manager.plugin_upload.installing_plugin_from_file', ['file' => $fileName])"/>
            <div class="mb-3">
                <pre style="line-height: 1">
                    <div>{{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.unpacking_the_package') }}</div>
                    <div>{{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.install_the_plugin') }}</div>

                    @if (! $isSameAsPluginID)
                        <div class="text-warning">{{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_id_conflict') }}</div>
                    @else
                        @if ($isAvailableUpdate)
                            <div class="text-success">{{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_available_update') }}</div>
                        @else
                            <div class="text-warning">{{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_already_installed') }}</div>
                        @endif
                    @endif
                </pre>
                @if(! $isAvailableUpdate)
                    <a class="btn mt-2" href="{{ route('plugin-manager.upload-plugin.index') }}">
                        {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.back') }}
                    </a>
                @endif
            </div>

            @if ($isAvailableUpdate)
                <div class="plugin-information mb-3">
                    <x-core::card class="mb-3">
                        <x-core::card.header>
                            <div class="card-title">{{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_information.title') }}</div>
                        </x-core::card.header>
                        <div class="table-responsive">
                            <x-core::table>
                                <x-core::table.header>
                                    <x-core::table.header.cell/>
                                    <x-core::table.header.cell>
                                        {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.current') }}
                                    </x-core::table.header.cell>
                                    <x-core::table.header.cell>
                                        {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.uploaded') }}
                                    </x-core::table.header.cell>
                                </x-core::table.header>

                                <x-core::table.body>
                                    <x-core::table.body.row>
                                        <x-core::table.body.cell>
                                            {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_information.id') }}
                                        </x-core::table.body.cell>
                                        <x-core::table.body.cell>
                                            {{ Arr::get($oldPluginContent, 'id') }}
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
                                            {{ Arr::get($oldPluginContent, 'name') }}
                                        </x-core::table.body.cell>
                                        <x-core::table.body.cell>
                                            {{ Arr::get($pluginContent, 'name') }}
                                        </x-core::table.body.cell>
                                    </x-core::table.body.row>

                                    <x-core::table.body.row>
                                        <x-core::table.body.cell>
                                            {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_information.author') }}
                                        </x-core::table.body.cell>
                                        <x-core::table.body.cell>
                                            {{ Arr::get($oldPluginContent, 'author') }}
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
                                            <x-core::badge class="bg-danger-lt text-danger">{{ Arr::get($oldPluginContent, 'version') }}</x-core::badge>
                                        </x-core::table.body.cell>
                                        <x-core::table.body.cell>
                                            <x-core::badge class="bg-green-lt text-success">{{ Arr::get($pluginContent, 'version') }}</x-core::badge>
                                        </x-core::table.body.cell>
                                    </x-core::table.body.row>

                                    <x-core::table.body.row>
                                        <x-core::table.body.cell>
                                            {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.plugin_information.minimum_core_version') }}
                                        </x-core::table.body.cell>
                                        <x-core::table.body.cell>
                                            {{ Arr::get($oldPluginContent, 'minimum_core_version') }}
                                        </x-core::table.body.cell>
                                        <x-core::table.body.cell>
                                            {{ Arr::get($pluginContent, 'minimum_core_version') }}
                                        </x-core::table.body.cell>
                                    </x-core::table.body.row>
                                </x-core::table.body>
                            </x-core::table>
                        </div>
                    </x-core::card>

                    <x-core::form
                        method="post"
                        :url="route('plugin-manager.update-plugin')"
                    >
                        <input type="hidden" name="name" value="{{ $pluginName }}"/>
                        <input type="hidden" name="file_path" value="{{ $filePath }}"/>
                        <input type="hidden" name="file_name" value="{{ $fileName }}"/>
                        <x-core::button type="submit" color="primary">
                            {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.update_plugin') }}
                        </x-core::button>

                        <a class="btn ms-2" href="{{ route('plugin-manager.remove-file-plugin', [
                            'file_path' => $filePath,
                        ]) }}">
                            {{ trans('plugins/plugin-manager::plugin-manager.plugin_upload.cancel') }}
                        </a>
                    </x-core::form>
                </div>
            @endif
        </x-core::card.body>
    </x-core::card>
@endsection
