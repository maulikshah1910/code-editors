@extends('layouts.admin')

@section('breadcrumbs')
<div class="container-fluid px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0">
            <li class="breadcrumb-item"><a href="{!! route('admin.dashboard.index') !!}">Home</a></li>
            <li class="breadcrumb-item"><a href="{!! route('admin.files.index') !!}">Files</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create a File</li>
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
                                <strong>Create a File</strong>
                                <div class="d-flex ms-auto">
                                    <a href="{!! route('admin.files.index') !!}" class="btn btn-primary">
                                        Back to List
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="" enctype="multipart/form-data" class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">
                                        Title
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Description
                                        <span class="text-danger">*</span>
                                    </label>
                                    <textarea rows="5" class="form-control"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">
                                        File
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="file" class="form-control" required />
                                    <small class="form-text text-body-secondary">
                                        Allowed file types: jpg, png, pdf, docx. Max size: 5MB.
                                    </small>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection