
@extends('backend.master')

@section('title')
   Manage Institute Name Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Institute Name Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Institute  Name</h4>
                    <a href="{{ route('institute-name-info.create') }}" class="btn btn-success float-end">
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
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($instituteNames as $instituteName)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $instituteName->instituteType->type_name ?? ''}}</td>
                                    <td>{{ $instituteName->institute_name}}</td>

                                    
                                    <td>
                                        <div class=d-flex>
                                        <a href="{{ route('institute-name-info.edit',  ['id' => $instituteName->id]) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                       
                                        <a href="{{route('institute-name-info.destroy', ['id' =>  $instituteName->id])}}" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Are you sure to delete this..');">
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

