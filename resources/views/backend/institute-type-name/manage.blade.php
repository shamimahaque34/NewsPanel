@extends('backend.master')

@section('title')
   Manage Institute Type Name Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Institute Type Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Institute Type Name</h4>
                    <a href="{{ route('institute-type-name-info.create') }}" class="btn btn-success float-end">
                        Add
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th> Institute Type Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($instituteTypeNames as $instituteTypeName)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $instituteTypeName->type_name}}</td>
                                    
                                    <td>
                                        <div class=d-flex>
                                        <a href="{{ route('institute-type-name-info.edit',  ['id' => $instituteTypeName->id]) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                       
                                        <a href="{{route('institute-type-name-info.destroy', ['id' =>  $instituteTypeName->id])}}" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Are you sure to delete this..');">
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

