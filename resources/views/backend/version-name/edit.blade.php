@extends('backend.master')

@section('title')
    Update Version  Name Info
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Version  Name Info', 'child' =>'Edit'])
@endsection



@section('body')
<section>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                   Update Version Name Info
                </div>
                <div class="card-body">
                    <form action="{{ route('version-name-info.update',['id'=>$versionName->id])}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mt-2">

                            <div class="col-md-6">
                            <label class="form-label">Institute Type Name</label>
                            
                                <select class="form-control" name="type_id" required onchange="getinstituteNameByinstituteType(this.value)">
                                    <option value="" selected disabled>-- Select Institute Type Name --</option>
                                    @foreach($instituteTypes as $instituteType)
                                    <option value="{{$instituteType->id}}"  {{$versionName->type_id == $instituteType->id ? 'selected' : ''}}>{{ $instituteType->type_name}}</option>
                                    @endforeach
                                </select>
                            
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Institute Name</label>
                            
                                <select class="form-control" name="institute_id" required id="instituteName">
                                    <option value="" selected disabled>-- Select Institute Name --</option>
                                    @foreach($instituteNames as $instituteName)
                                    <option value="{{$instituteName->id}}"  {{$versionName->institute_id == $instituteName->id ? 'selected' : ''}}>{{ $instituteName->institute_name}}</option>
                                    @endforeach
                                </select>
                            
                        </div>
                        
                       {{-- <div class="form-group row mt-2"> --}}
                                <div class="col-md-6  ">
                                <label for="" class="form-label"> version  Name</label>
                                <input type="text"  class="form-control" name="version_name" placeholder=" Enter Version  Name" value="{{$versionName->version_name}}">
                            </div>
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

<script>
    function getinstituteNameByinstituteType(id)
    {
        $.ajax({
            method: "GET",
            url: "{{url('/get-institute-name-by-institute-type')}}",
            data: {id:id},
            type: 'JSON',
            success: function (response) {
                var select = $('#instituteName');
                select.empty();
                var option = '';
                option += '<option value="" selected disabled> -- Select Institute Name -- </option>';
                $.each(response, function (key, value) {
                    option += '<option value="'+value.id+'">'+value.institute_name+'</option>';
                });
                select.append(option);
            }
        });
    }
</script>

@endsection



@endsection
