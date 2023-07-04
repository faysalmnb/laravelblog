@extends('layouts.master')
@section('title', 'category')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="">Add Category</h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/add-category')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="md-3">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="md-3">
                        <label for="name">Slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                    <div class="md-3">
                        <label for="name">Description</label>
                        <textarea rows="5" name="description" class="form-control"></textarea>
                    </div>
                    <div class="md-3">
                        <label for="name">Image</label>
                        <input type="file" name="slug" class="form-control">
                    </div>

                    <h6>SEO Tags</h6>
                    <div class="md-3">
                        <label for="name">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="md-3">
                        <label for="name">Meta Description</label>
                        <textarea rows="5" name="meta_description" class="form-control"></textarea>
                    </div>
                    <div class="md-3">
                        <label for="name">Meta keywords</label>
                        <input type="text" name="meta_keyword" class="form-control">
                    </div>

                    <h6>Status Mode</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="">Navbar Status</label>
                            <input type="checkbox" name="navbar_status">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status">
                        </div>

                        <div class="col-md-6">
                            <button type="submit" >Save Category</button>
                        </div>
                    </div>
                    
                    
                </form>

            </div>


        </div>
    </div>
@endsection
