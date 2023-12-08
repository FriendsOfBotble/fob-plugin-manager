@extends(BaseHelper::getAdminMasterLayoutTemplate())

@section('content')
    <v-plugin-manager
        last-update-check="{{ $lastCheckUpdate }}"
    ></v-plugin-manager>
@endsection
