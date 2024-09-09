@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($profile))
            <div class="row">
                <div class="profile col-md-8 mx-auto mt-3">
                    <div class="row">
                        <div class="text col-md-6">
                            <div class="name">
                                {{ Str::limit($profile->name, 10) }}
                            </div>
                            <div class="gender">
                                {{ Str::limit($profile->gender, 5) }}
                            </div>
                            <div class="hobby mt-3">
                                {{ Str::limit($profile->hobby, 500) }}
                            </div>
                            <div class="introduction mt-3">
                                {{ Str::limit($profile->introduction, 1000) }}
                            </div>
                        </div>
                    </div>
                </div>
                <hr color="#c0c0c0">
            </div>
        @endif
    </div>
@endsection