@php
    $oldPluginContent = session('oldPluginContent');
    $pluginContent = session('pluginContent');

    $isSameAsPluginID = $oldPluginContent['id'] === $pluginContent['id'];
    $isAvailableUpdate = $isSameAsPluginID && version_compare($pluginContent['version'], $oldPluginContent['version'], '>');
@endphp

@if (! $isSameAsPluginID)
    <x-core::alert type="warning">
        {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_id_conflict') }}
    </x-core::alert>
@else
    @if ($isAvailableUpdate)
        <x-core::alert type="success">
            {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_available_update') }}
        </x-core::alert>
    @else
        <x-core::alert type="warning">
            {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_already_installed') }}
        </x-core::alert>
    @endif
@endif

<x-core::form method="post" :url="route('plugin-manager.update-plugin')">
    @if($isAvailableUpdate)
        <input type="hidden" name="name" value="{{ session('pluginName') }}"/>
        <input type="hidden" name="file_path" value="{{ session('filePath') }}"/>
        <input type="hidden" name="file_name" value="{{ session('fileName') }}"/>
    @endif

    <x-core::card>
        <x-core::card.header>
            <div class="card-title">{{ session('fileName') }}</div>
        </x-core::card.header>

        <div class="table-responsive">
            <x-core::table>
                <x-core::table.header>
                    <x-core::table.header.cell/>
                    <x-core::table.header.cell>
                        {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.current') }}
                    </x-core::table.header.cell>
                    <x-core::table.header.cell>
                        {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.uploaded') }}
                    </x-core::table.header.cell>
                </x-core::table.header>

                <x-core::table.body>
                    <x-core::table.body.row>
                        <x-core::table.body.cell>
                            {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_information.id') }}
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
                            {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_information.name') }}
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
                            {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_information.author') }}
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
                            {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_information.version') }}
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
                            {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_information.minimum_core_version') }}
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

        <x-core::card.footer>
            <div class="btn-list">
                <x-core::button tag="a" :href="route('plugin-manager.upload-plugin.index')">
                    {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.back') }}
                </x-core::button>

                @if($isAvailableUpdate)
                    <x-core::button type="submit" color="primary">
                        {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.update_plugin') }}
                    </x-core::button>
                @endif
            </div>
        </x-core::card.footer>
    </x-core::card>
</x-core::form>
