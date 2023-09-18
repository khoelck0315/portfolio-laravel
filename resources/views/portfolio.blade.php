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
    <section class="container-fluid mt-5 p-5 body-secondary">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" style="height: 3em; margin-right: 10px" viewBox="0 0 512 512">
                        <path d="M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2v82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9V380.8c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/>
                    </svg>
                    <p>
                        The contents of this page are a result of a real-time API call to Github to retrieve and display this data.  This will find all public repos for a user and display them here, breaking down language usage, last updated time, and providing links to view them.  Go ahead, try it with a different user!
                    </p>
                </div>
                @include('components.getuser')
            </div>
        </div>
    </section>
    <!--Expand and potentially mention my other web projects? Make the above a component that is only rendered on a post,
         and clicking portfolio displays additional data??-->
@stop
    
