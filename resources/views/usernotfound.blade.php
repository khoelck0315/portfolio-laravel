@extends('layouts.default', ['title' => "Error - user not found"])
@section('content')
    <section class="container-fluid mt-5 p-5 body-secondary">
        <div class="row justify-content-center">
            <div class="col-8">    
                <h4>Sorry, the user {{$user}} was not found on Github.  Please try again</h4>

                @include('components.getuser')
                
            </div>
        </div>
    </section>
@stop