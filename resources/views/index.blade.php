@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    <x-core::alert type="warning">
        Please be careful to who you give access to this page, the plugin manager could be misused by bad actors to install plugins that could compromise your system.
    </x-core::alert>

    <v-plugin-manager
        last-update-check="{{ $lastCheckUpdate }}"
    ></v-plugin-manager>
@endsection
