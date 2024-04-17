@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    <x-core::card data-bb-toggle="upload-plugin">
        <x-core::card.body>
            <x-core::alert :title="__('Installing plugin from uploaded file: :fileName', ['fileName' => $fileName])"/>
            <div class="mb-3">
                <pre style="line-height: 1">
                    <div>{{ __('Unpacking the package…') }}</div>
                    <div>{{ __('Installing the plugin…') }}</div>
                    @if (count($fails) > 0)
                        @foreach ($fails as $messages)
                            <div class="text-danger">{{ $messages }}</div>
                        @endforeach
                    @else
                        <div class="text-warning">{{ __('Destination folder already exists :path', ['path' => plugin_path($pluginName)]) }}
                        </div>
                    @endif
                </pre>
                @if(count($fails))
                    <a class="btn mt-2" href="{{ route('plugin-manager.upload-plugin.index') }}">{{ __('Back') }}</a>
                @endif
            </div>

            @if(! count($fails))
                <div class="plugin-information mb-3">
                    <div class="mb-3">
                        <strong>{{ __('This plugin is already installed.') }}</strong>
                    </div>
                    <x-core::card class="mb-3">
                        <x-core::card.header>
                            <div class="card-title">{{ __('Plugin Information') }}</div>
                        </x-core::card.header>
                        <table class="table table-vcenter card-table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>{{ __('Current') }}</th>
                                <th>{{ __('Uploaded') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ __('ID:') }}</td>
                                <td>{{ Arr::get($oldPluginContent, 'id') }}</td>
                                <td>{{ Arr::get($pluginContent, 'id') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Name:') }}</td>
                                <td>{{ Arr::get($oldPluginContent, 'name') }}</td>
                                <td>{{ Arr::get($pluginContent, 'name') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Author') }}</td>
                                <td>{{ Arr::get($oldPluginContent, 'author') }}</td>
                                <td>{{ Arr::get($pluginContent, 'author') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Version') }}</td>
                                <td>{{ Arr::get($oldPluginContent, 'version') }}</td>
                                <td>{{ Arr::get($pluginContent, 'version') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Minimum Core Version') }}</td>
                                <td>{{ Arr::get($oldPluginContent, 'minimum_core_version') }}</td>
                                <td>{{ Arr::get($pluginContent, 'minimum_core_version') }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </x-core::card>

                    <x-core::form
                        method="post"
                        :url="route('plugin-manager.replace-plugin')"
                    >
                        <input type="hidden" name="name" value="{{ $pluginName }}"/>
                        <input type="hidden" name="file_path" value="{{ $filePath }}"/>
                        <input type="hidden" name="file_name" value="{{ $fileName }}"/>
                        <x-core::button type="submit" class="btn btn-primary">
                            {{ __('Replace current with upload') }}
                        </x-core::button>

                        <a class="btn" href="{{ route('plugin-manager.un-replace-plugin', [
                            'file_path' => $filePath,
                        ]) }}">
                            {{ __('Cancel and go back') }}
                        </a>
                    </x-core::form>
                </div>
            @endif
        </x-core::card.body>
    </x-core::card>
@endsection
