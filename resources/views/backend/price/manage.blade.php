
@extends('backend.master')

@section('title')
   Manage price Name Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Price Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Price</h4>
                    <a href="{{ route('price-info.create') }}" class="btn btn-success float-end">
                        Add
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Institute Type Name</th>
                                <th>Institute Name</th>
                                <th>Version Name</th>
                                <th>Page Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($prices as $price)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $price->instituteType->type_name ?? ''}}</td>
                                    <td>{{ $price->instituteName->institute_name ?? ''}}</td>
                                    <td>{{ $price->versionName->version_name ?? ''}}</td>
                                    <td>{{ $price->pageName->page_name ?? ''}}</td>
                                    <td>{{ $price->content_price}}</td>


                                    
                                    <td>
                                        <div class=d-flex>
                                        <a href="{{ route('price-info.edit',  ['id' => $price->id]) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                       
                                        <a href="{{route('price-info.destroy', ['id' =>  $price->id])}}" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Are you sure to delete this..');">
                                            <i class="dripicons-trash"></i>
                                        </a>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

