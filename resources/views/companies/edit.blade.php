@extends('layouts/app')

@section('content')

    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">

        <div class="row col-lg-12 col-md-12 col-sm-12" style="background: #FFF; margin: 10px;">


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