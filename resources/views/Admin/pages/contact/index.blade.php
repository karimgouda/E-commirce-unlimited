@extends('Admin/includes/master')
@section('content')
    <div id="content" class="main-content">
        <div class="container">

            <div class="container">

                <!--  BEGIN BREADCRUMBS  -->
                <div class="secondary-nav">
                    <div class="breadcrumbs-container" data-page-heading="Analytics">
                        <header class="header navbar navbar-expand-sm">
                            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                            </a>
                            <div class="d-flex breadcrumb-content">
                                <div class="page-header">

                                    <div class="page-title">
                                    </div>

                                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Form</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Basic</li>
                                        </ol>
                                    </nav>

                                </div>
                            </div>
                        </header>
                    </div>
                </div>
                <div class="row layout-top-spacing">

                    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4 class="text-center mt-2">All FeedBack</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">User Name</th>

                                            <th class="text-center" scope="col">E-mail</th>

                                            <th class="text-center" scope="col-3">Subject</th>
                                            <th class="text-center" scope="col-3">Message</th>
                                            <th class="text-center" scope="col-3">Status</th>
                                            <th class="text-center" scope="col-3">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($contacts as $contact)
                                            <tr>
                                                <td>{{$contact->name}}</td>

                                                <td>{{$contact->email}}</td>
                                                <td>{{$contact->subject}}</td>
                                                <td>{{$contact->message}}</td>
                                                    @if($contact->status == 1)
                                                    <td class="text-success">Approved</td>
                                                @elseif($contact->status == 0)
                                                        <td class="text-danger">Rejected</td>
                                                    @endif

                                                <td class="text-center col-2">

                                                    <form action="{{route('admin.updateStatus',$contact->id)}}" method="POST" style="display: inline">
                                                        @method('PUT')
                                                        @csrf
                                                        @if($contact->status == 1)
                                                            <button class="btn btn-danger"> Rejected </button>
                                                        @elseif($contact->status == 0)
                                                            <button class="btn btn-success"> Approved </button>
                                                        @endif
                                                    </form>

                                                    <form action="{{route('admin.delete',$contact->id)}}" method="POST" style="display: inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger">{{__('dashboard.delete')}}</button>
                                                    </form>
                                                </td>


                                            </tr>
                                        @empty
                                            <h5>No Data Found</h5>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
