@extends('layouts.application', ['title' => trans('Components')])
@section('content')
    <div class="pages">
        <div data-page="team" class="page no-toolbar no-navbar">
            <div class="page-content">
                @include('layouts/langue')
                <div id="pages_maincontent">


                </div>
            </div>
        </div>
    </div>
@endsection