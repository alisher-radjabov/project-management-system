@extends('layouts/app')

@section('content')

        <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
            <!-- Jumbotron -->
            <div class="jumbotron">
                <h1>{{ $company->name }}</h1>
                <p class="lead">{{ $company->description }}</p>
            </div>

            <div class="row" style="background: #FFF; margin: 10px;">
                @foreach($company->projects as $project)
                    <div class="col-lg-4">
                        <h2>{{ $project->name }}</h2>
                        <p>{{ $project->description }}</p>
                        <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button">View details »</a></p>
                    </div>
                @endforeach
            </div>

        </div>


        <aside class="col-md-3 col-lg-3 col-sm-3 pull-right">

            <div class="p-3">
                <h4>Actions</h4>
                <ol class="list-unstyled">
                    <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
                    <li><a href="#">Delete</a></li>
                    <li><a href="#">Add new member</a></li>
                </ol>
            </div>



        </aside>

@endsection