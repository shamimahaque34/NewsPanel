@extends('backend.master')

@section('title')
    Update Institute  Name Info
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Institute  Name Info', 'child' =>'Edit'])
@endsection



@section('body')
<section>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                   Update Institute Name Info
                </div>
                <div class="card-body">
                    <form action="{{ route('institute-name-info.update',['id'=>$instituteName->id])}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mt-2">
                            <div class="col-md-6">
                            <label class="form-label">Institute Type Name</label>
                            
                                <select class="form-control" name="type_id" required >
                                    <option value="" selected disabled>-- Select Institute Type Name --</option>
                                    @foreach($instituteTypes as $instituteType)
                                    <option value="{{$instituteType->id}}"  {{isset($instituteName) && $instituteName->type_id == $instituteType->id ? 'selected' : ''}}>{{ $instituteType->type_name}}</option>
                                    @endforeach
                                </select>
                            
                        </div>
                        
                       <div class="form-group row mt-2">
                                <div class="col-md-6  ">
                                <label for="" class="form-label"> Institute  Name</label>
                                <input type="text"  class="form-control" name="institute_name" placeholder=" Enter Institute  Name" value="{{$instituteName->institute_name}}">
                            </div>


                            <div class="col-lg-12 mt-2">
                                <button type="submit" class="btn btn-primary text-uppercase text-center">submit</button>
                              </div>
                                        
                           
                             
                           
                           
                        </div>

                     </form>
                </div>
            </div>
        </div>
    </div>
</section>

@section('script')

  <script>
    CKEDITOR.replace('editor');
  </script>

@endsection

@endsection
