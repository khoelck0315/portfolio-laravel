@extends('layouts.default', ['title' => "$user->name's Portfolio"])
@vite(['resources/sass/github-lang-colors.scss'])


@section('content')
    <section class="container-sm mt-5">
        <h1 class="mb-3 text-center"> Viewing Github repositories for {{ $user->name }} </h1>
        
        <div class="mt-3 row justify-content-center">
            <div class="col-lg-4 d-flex flex-column justify-content-center">
                <img class="m-auto d-block" style="width: 10rem; height: 10rem;" src="{{$user->avatar}}" alt="Github Avatar">
                <p class="mb-0 p-3">{{$user->bio}}</p>
            </div>
            <div class="col-lg-4">
                <h3 class="text-center"> Languages </h3>
                @foreach($languages as $language => $value)
                    <div class="progress mb-2 bg-dark-subtle" role="progressbar" aria-label="{{$language}}" aria-valuenow="{{$value}}" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar overflow-visible {{$language}}" style="width: {{$value}}%"><span class="bar-label">{{$language}}: {{$value}}%</span></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-sm">
        <div class="row row-cols-2 row-cols-md-3 g-5 mt-3">
            @foreach ($repositories as $repo)
                
                @if ($repo->name == $user->login)
                    @continue
                @endif

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $repo->name }} </h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                @foreach ($repo->languages['list'] as $language)
                                    <span>{{ $language["name"] }}: {{ $language["percentage"] }}%</span>
                                @endforeach
                            </h6>
                            <p class="card-text">{{ $repo->description }}</p>
                            
                        </div>                
                        <div class="p-3">
                            <a href="{{ $repo->html_url }}" target="_blank" class="btn btn-primary">View</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated {{ $repo->updated_at->format('F j, Y') }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    
    <!--Explanation and form section-->
    <section class="container-md mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col">
                <p>
                    The contents of this page are a result of a real-time API call to Github to retrieve and display this data.  This will find all public repos for a user and display them here, breaking down language usage, last updated time, and providing links to view them.  Go ahead, try it with a different user!
                </p>
                <x-getuser/>
            </div>
        </div>
    </section>
    <!--Expand and potentially mention my other web projects? Make the above a component that is only rendered on a post,
         and clicking portfolio displays additional data??-->
@stop
    
