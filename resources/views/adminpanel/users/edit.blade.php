@extends('adminpanel.index')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Edit user: {{ $user->name }}
                    </h2>

                </div>
                <div class="body">
                    <form method="post" action="{{ url('/users/'.$user->id.'/edit') }}">
                        @csrf
                        <div class="form-line">
                            <input type="text" class="form-control" value="{{ $user->name }}"
                                   name="name" placeholder="name"
                                   required/>
                            <p class="help-block">{{ $errors->first('name') }}</p>
                        </div>
                        <button class="btn btn-block" type="submit">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="pagin">{{ $users->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}</div>--}}
    </div>

@endsection