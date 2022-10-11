@extends('backend.master')

@section('title')
    Update Page  Name Info
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Page  Name Info', 'child' =>'Edit'])
@endsection



@section('body')
<section>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                   Update Page Name Info
                </div>
                <div class="card-body">
                    <form action="{{ route('page-name-info.update',['id'=>$pageName->id])}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mt-2">

                            <div class="col-md-6">
                            <label class="form-label">Institute Type Name</label>
                            
                                <select class="form-control" name="type_id" required onchange="getinstituteNameByinstituteType(this.value)">
                                    <option value="" selected disabled>-- Select Institute Type Name --</option>
                                    @foreach($instituteTypes as $instituteType)
                                    <option value="{{$instituteType->id}}" {{$pageName->type_id == $instituteType->id ? 'selected' : ''}}>{{ $instituteType->type_name}}</option>
                                    @endforeach
                                </select>
                            
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Institute Name</label>
                            
                                <select class="form-control" name="institute_id" required id="instituteName" onchange="getversionNameByinstituteName(this.value)">
                                    <option value="" selected disabled>-- Select Institute Name --</option>
                                    @foreach($instituteNames as $instituteName)
                                    <option value="{{$instituteName->id}}" {{$pageName->type_id == $instituteName->id ? 'selected' : ''}}>{{ $instituteName->institute_name}}</option>
                                    @endforeach
                                </select>
                            
                        </div>


                        <div class="col-md-6">
                            <label class="form-label">Version Name</label>
                            
                                <select class="form-control" name="version_id" required id="versionName">
                                    <option value="" selected disabled>-- Select Version Name --</option>
                                    @foreach($versionNames as $versionName)
                                    <option value="{{$versionName->id}}" {{$pageName->type_id == $versionName->id ? 'selected' : ''}}>{{ $versionName->version_name}}</option>
                                    @endforeach
                                </select>
                            
                        </div>
                        
                       {{-- <div class="form-group row mt-2"> --}}
                                <div class="col-md-6  ">
                                <label for="" class="form-label"> Page Name</label>
                                <input type="text"  class="form-control" name="page_name" placeholder=" Enter Page Name" value="{{$pageName->page_name}}">
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


<script>
    function getversionNameByinstituteName(id)
    {
        $.ajax({
            method: "GET",
            url: "{{url('/get-version-name-by-institute-name')}}",
            data: {id:id},
            type: 'JSON',
            success: function (response) {
                var select = $('#versionName');
                select.empty();
                var option = '';
                option += '<option value="" selected disabled> -- Select Version Name -- </option>';
                $.each(response, function (key, value) {
                    option += '<option value="'+value.id+'">'+value.version_name+'</option>';
                });
                select.append(option);
            }
        });
    }
</script>

@endsection



@endsection
