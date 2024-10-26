@extends('backend.main')
@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                @if(Session::has('message'))
                <span class="text-danger">{{Session::get('message')}}</span>
                @endif
                <div class="page-title-box">
                    <h4 class="page-title fw-bold">Dashboard</h4>
                </div>
            </div>
        </div>
    </div>
    @endsection
    