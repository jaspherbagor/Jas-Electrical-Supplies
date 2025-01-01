@extends('admin.layout.app')

@section('heading', 'Add Product')

@section('right_top_button')
<a href="" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Photo *</label>
                                    <div>
                                        <input type="file" name="featured_photo">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Product Name *</label>
                                    <input type="text" class="form-control" name="room_name" value={{ old('name') }}>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description *</label>
                                    <textarea name="description" class="form-control h_100 snote"  cols="30" rows="10">{{ old('description') }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Price *</label>
                                    <input type="number" class="form-control" name="price" value={{ old('price') }}>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Total Quantity *</label>
                                    <input type="number" class="form-control" name="total_rooms" value={{ old('total_quantity') }}>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Unit Of Measurement</label>
                                   <input type="text" class="form-control" name="unit_of_measurement">
                                </div>
                                <div class="mb-4">
                                    <label for="" class="form-label">Category</label>
                                    <input type="text" class="form-control"name="category">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection