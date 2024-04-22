@php
    $pluginContent = session('pluginContent');
@endphp

    <x-core::alert type="success">
        {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.installed_message', ['file' => session('fileName'), 'name' => $pluginContent['name']]) }}
    </x-core::alert>

    <x-core::form method="post" :url="route('plugins.change.status')">
        @method('PUT')
        <input type="hidden" name="name" value="{{ session('pluginName') }}"/>

        <x-core::card>
            <x-core::card.header>
                <x-core::card.title>{{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_information.title') }}</x-core::card.title>
            </x-core::card.header>
            <div class="table-responsive">
                <x-core::table>
                    <x-core::table.body>
                        <x-core::table.body.row>
                            <x-core::table.body.cell>
                                {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_information.id') }}
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
                                {{ Arr::get($pluginContent, 'name') }}
                            </x-core::table.body.cell>
                        </x-core::table.body.row>
                        <x-core::table.body.row>
                            <x-core::table.body.cell>
                                {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_information.description') }}
                            </x-core::table.body.cell>
                            <x-core::table.body.cell>
                                {{ Arr::get($pluginContent, 'description') }}
                            </x-core::table.body.cell>
                        </x-core::table.body.row>
                        <x-core::table.body.row>
                            <x-core::table.body.cell>
                                {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_information.author') }}
                            </x-core::table.body.cell>
                            <x-core::table.body.cell>
                                @if(Arr::get($pluginContent, 'url'))
                                    <a href="{{ Arr::get($pluginContent, 'url') }}" target="_blank">{{ Arr::get($pluginContent, 'author') }}</a>
                                @else
                                    {{ Arr::get($pluginContent, 'author') }}
                                @endif
                            </x-core::table.body.cell>
                        </x-core::table.body.row>
                        <x-core::table.body.row>
                            <x-core::table.body.cell>
                                {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_information.version') }}
                            </x-core::table.body.cell>
                            <x-core::table.body.cell>
                                {{ Arr::get($pluginContent, 'version') }}
                            </x-core::table.body.cell>
                        </x-core::table.body.row>
                        <x-core::table.body.row>
                            <x-core::table.body.cell>
                                {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.plugin_information.minimum_core_version') }}
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
                    <x-core::button type="submit" color="primary">
                        {{ trans('plugins/fob-plugin-manager::plugin-manager.plugin_upload.activate_plugin') }}
                    </x-core::button>
                </div>
            </x-core::card.footer>
        </x-core::card>
    </x-core::form>
