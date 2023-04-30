@extends('Admin/includes/master')

@section('content')
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive ">
                    <form action="{{route('admin.users.ActiveUsers')}}" method="post" class="my-4" style="display: inline">
                        @csrf @method('PUT')
                        <button class="btn btn-primary"> Active All Users </button>
                    </form>
                    <form action="{{route('admin.users.InActiveUsers')}}" method="post" class="my-4" style="display: inline">
                        @csrf @method('PUT')
                        <button class="btn btn-danger"> InActive All Users </button>
                    </form>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{__("dashboard.user_name")}}</th>
                            <th class="text-center"> {{__("dashboard.email")}}</th>
                            <th>{{__("dashboard.phone")}}</th>
                            <th>{{__("dashboard.address")}}</th>
                            <th>{{__("dashboard.role")}}</th>
                            <th>{{__("dashboard.active")}}</th>
                            <th>{{__("dashboard.action")}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>

                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                                @if($user->active == 1)
                                <p class="text-success">Active</p>
                                @else
                                    <p class="text-danger">In ِActive</p>
                                @endif
                            </td>
                            <td>
                                <form action="{{route('admin.users.pan',$user->id)}}" method="post" style="display: inline">
                                    @csrf @method('PUT')
                                    @if($user->active == 1)
                                        <button class="btn btn-danger">{{__("dashboard.inactive")}}</button>
                                    @else
                                        <button class="btn btn-success">{{__("dashboard.on")}}</button>
                                    @endif
                                </form>
                                <form action="{{route('admin.users.delete',$user->id)}}" method="post" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">{{__("dashboard.delete")}}</button>
                                </form>
                            </td>


                        </tr>
                        @empty
                            <div>No Data Found</div>
                        @endforelse
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
