@extends('admin.layout.app')
@section('heading', 'All Products')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Room</th>
                                    <th>Accommodation Name</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0; @endphp
                                
                                <tr>
                                    <td>1</td>
                                    <td><img src="" alt="slide_image" class="w_200"></td>
                                    <td></td>
                                    <td></td>                                        
                                    <td></td>

                                    <td>
                                        
                                    </td>
                                    <td class="pt_10 pb_10">
                                        
                                    </div>
                                    
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection