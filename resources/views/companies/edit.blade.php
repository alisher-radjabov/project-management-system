@extends('layouts/app')

@section('content')

    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">

        <div class="row col-lg-12 col-md-12 col-sm-12" style="background: #FFF; margin: 10px;">

            <form method="post" action="{{ route('companies.update', [$company->id]) }}" class="form-control">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label for="company-name">Name<span class="required">*</span></label>
                    <input placeholder="Enter name"
                           id="company-name"
                           required
                           name="name"
                           class="form-control"
                           value="{{ $company->name }}"/>

                </div>
                <div class="form-group">
                    <label for="company-name">Description</label>
                    <textarea placeholder="Enter description"
                              style="reseize:vertical"
                              name="description"
                              rows="5"
                              class="form-control autosize-target text-left">{{ $company->description }}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit"/>
                </div>
            </form>
        </div>

    </div>


    <aside class="col-md-3 col-lg-3 col-sm-3 pull-right">

        <div class="p-3">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/companies/{{ $company->id }}">View companies</a></li>
                <li><a href="/companies/">All companies</a></li>
            </ol>
        </div>


    </aside>

@endsection