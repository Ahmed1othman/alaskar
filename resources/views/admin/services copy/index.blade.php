@extends('layouts.admin.master')
@section('title')
    {{trans('admin/services.Services')}}
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            @include('message')
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <a href="{{route('Services.create')}}" class="btn btn-success">{{trans('admin/services.Add_new_Service')}}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered text-center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{trans('admin/services.title')}}</th>
                                <th>{{trans('admin/services.active')}}</th>
                                <th>{{trans('admin/services.photo')}}</th>
                                <th>{{trans('admin/services.Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $row)
                            <tr id="row_{{$row->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->title}}</td>
                                <td>{!! $row->active==1?'<i class="bx bx-check-circle text-success" aria-hidden="true"></i>':'<i class="bx bx-error text-danger" aria-hidden="true"></i>'!!}</td>
                                <td>
                                    @if ($row->image)
                                        <a href="{{asset($row->image)}}" data-fancybox="group2">
                                            <img width="75px" height="75px" src="{{asset($row->image)}}" alt="{{$row->title}}" class="">
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('Services.edit',$row->id)}}" class="btn btn-success btn-sm"><i class='bx bx-edit'></i></a>
                                    <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" onclick="delete_alert({{$row->id}},'Services')" ><i class="bx bx-trash"></i></button>
                                </td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
