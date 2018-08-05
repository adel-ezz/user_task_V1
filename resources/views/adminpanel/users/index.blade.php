@extends('adminpanel.index')
@section('content')
    @push('css')
        <!-- JQuery DataTable Css -->
        <link href="{{asset('cpanel/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}"
              rel="stylesheet">
    @endpush



    {{--<div class="body table-responsive">--}}
    {{--<table class="table table-bordered table-striped table-hover js-basic-example ">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th class="text-center">الإسم</th>--}}
    {{--<th class="text-center">الحالة</th>--}}
    {{--<th class="text-center">القسم</th>--}}
    {{--<th class="text-center">رقم الهاتف</th>--}}
    {{--<th class="text-center">صورة مصغرة</th>--}}
    {{--<th class="text-center">أفعال</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--@foreach($users as $user)--}}
    {{--<tr>--}}
    {{--<td class="text-center">--}}
    {{--<a href="{{ url('/users/'.$user->id.'/edit ') }}">{{ $user->name }}</a>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="switch">--}}
    {{--<label>مفعل<input  class="activation service" custom="{{ $user->id }}"--}}
    {{--type="checkbox"--}}
    {{--name="isActive" {{ $user->isActive == 1 ?  'checked' :'' }}><span--}}
    {{--class="lever"></span>مغلق</label>--}}
    {{--</div>--}}
    {{--</td>--}}

    {{--<td class="text-center">{{ $user->phone }}</td>--}}
    {{--<td class="text-center"><img src="{{ asset('/photos/services/'.explode('/', $user->photo)[0]) }}"--}}
    {{--width="30"--}}
    {{--height="30"></td>--}}
    {{--<td class="text-center">--}}
    {{--<a href="{{ url('/users/'.$user->id.'/edit ') }}"--}}
    {{--type="button"--}}
    {{--class="btn bg-deep-purple btn-circle waves-effect waves-circle waves-float"--}}
    {{--title="تعديل">--}}
    {{--<i class="material-icons">settings</i>--}}
    {{--</a>--}}
    {{--<form action="{{ url('panel/users/'.$user->id) }}"--}}
    {{--style="display:inline-block" method="post" class="deleteme">--}}
    {{--@csrf--}}
    {{--<input type="hidden" name="_method" value="DELETE">--}}
    {{--<button type="submit"--}}
    {{--class="btn bg-red btn-circle waves-effect waves-circle waves-float "--}}
    {{--title="حذف">--}}
    {{--<i class="material-icons">delete_forever</i>--}}
    {{--</button>--}}
    {{--</form>--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--@endforeach--}}
    {{--</tbody>--}}
    {{--</table>--}}
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Users
                    </h2>

                </div>
                <div class="body">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ url('/users/'.$user->id.'/edit ') }}"
                                       type="button"
                                       class="btn bg-deep-purple btn-circle waves-effect waves-circle waves-float"
                                       title="تعديل">
                                        <i class="material-icons">settings</i>
                                    </a>
                                    <form action="{{ url('panel/users/'.$user->id) }}"
                                          style="display:inline-block" method="post" class="deleteme">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit"
                                                class="btn bg-red btn-circle waves-effect waves-circle waves-float "
                                                title="Delete">
                                            <i class="material-icons">delete_forever</i>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
    {{--<div class="pagin">{{ $users->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}</div>--}}
    </div>

@endsection