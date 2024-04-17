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
                        <div class="text-success">{{ __('Plugin installed successfully.') }}</div>
                    @endif
                </pre>
                @if(count($fails))
                    <a class="btn mt-2" href="{{ route('plugin-manager.upload-plugin.index') }}">{{ __('Back') }}</a>
                @endif
            </div>

            @if(! count($fails))
                <div class="plugin-information mb-3" style="width: 50%">
                    <x-core::card>
                        <x-core::card.header>
                            <div class="card-title">{{ __('Plugin Information') }}</div>
                        </x-core::card.header>
                        <table class="table table-vcenter card-table">
                            <tbody>
                            <tr>
                                <td>{{ __('ID:') }}</td>
                                <td>{{ Arr::get($pluginContent, 'id') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Name:') }}</td>
                                <td>{{ Arr::get($pluginContent, 'name') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Description:') }}</td>
                                <td>{{ Arr::get($pluginContent, 'description') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Author') }}</td>
                                <td>{{ Arr::get($pluginContent, 'author') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Version') }}</td>
                                <td>{{ Arr::get($pluginContent, 'version') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Minimum Core Version') }}</td>
                                <td>{{ Arr::get($pluginContent, 'minimum_core_version') }}</td>
                            </tr>
                            </tbody>
                        </table>

                    </x-core::card>
                </div>

                <x-core::form
                    method="post"
                    :url="route('plugin-manager.activate-plugin')"
                >
                    <input type="hidden" name="name" value="{{ $pluginName }}"/>
                    <x-core::button type="submit" class="btn btn-primary">
                        {{ __('Activate Plugin') }}
                    </x-core::button>
                </x-core::form>
            @endif
        </x-core::card.body>
    </x-core::card>
@endsection
