@extends('layouts.admin')

@section('breadcrumbs')
<div class="container-fluid px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0">
            <li class="breadcrumb-item"><a href="{!! route('admin.dashboard.index') !!}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Files</li>
        </ol>
    </nav>
</div>
@endsection

@section('page_content')
<div class="body flex-grow-1">
    <div class="body">
        <div class="container-lg px-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-flex align-items-center ">
                                <strong>Files</strong>
                                <div class="d-flex ms-auto">
                                    <a href="{!! route('admin.files.create') !!}" class="btn btn-primary">
                                        New
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-content">
                                <table class="table table-hover table-strip table-responsive">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>File Name</th>
                                            <th>Type</th>
                                            <th>Extension</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="5" class="text-center">No files found</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-pagination">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection