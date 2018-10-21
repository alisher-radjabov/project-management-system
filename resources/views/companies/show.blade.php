@extends('layouts/app')

@section('content')

    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>{{ $company->name }}</h1>
            <p class="lead">{{ $company->description }}</p>
        </div>


        <div class="row col-md-12 col-lg-12 col-sm-12" style="background: #FFF; margin: 10px;">

            <a href="/projects/create" class="pull-right btn btn-primary btn-sm">Add Project</a>

            @foreach($company->projects as $project)
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h2>{{ $project->name }}</h2>
                    <p>{{ $project->description }}</p>
                    <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button">View details »</a>
                    </p>
                </div>
            @endforeach
        </div>

    </div>

    <aside class="col-md-3 col-lg-3 col-sm-3 pull-right">

        <div class="p-3">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
                <br/>
                <li><a href="/projects/create">Add Project</a></li>
                <br/>
                <li><a href="/companies">My companies</a></li>
                <br/>
                <li><a href="/companies/create">Create new company</a></li>
                <br/>
                <li>
                    <a href="#" onclick=" var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          ">
                        Delete
                    </a>
                    <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}"
                          method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ol>
        </div>
    </aside>

@endsection