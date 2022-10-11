@extends('backend.master')

@section('title')
    Add Price Info
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Price Info', 'child' =>'Add'])
@endsection



@section('body')
<section>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                   Add Price Info
                </div>
                <div class="card-body">
                    <form action="{{ route('price-info.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mt-2">

                            <div class="col-md-6">
                            <label class="form-label">Institute Type Name</label>
                            
                                <select class="form-control" name="type_id" required onchange="getinstituteNameByinstituteType(this.value)">
                                    <option value="" selected disabled>-- Select Institute Type Name --</option>
                                    @foreach($instituteTypes as $instituteType)
                                    <option value="{{$instituteType->id}}" >{{ $instituteType->type_name}}</option>
                                    @endforeach
                                </select>
                            
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Institute Name</label>
                            
                                <select class="form-control" name="institute_id" required id="instituteName" onchange="getversionNameByinstituteName(this.value)">
                                    <option value="" selected disabled>-- Select Institute Name --</option>
                                    @foreach($instituteNames as $instituteName)
                                    <option value="{{$instituteName->id}}">{{ $instituteName->institute_name}}</option>
                                    @endforeach
                                </select>
                            
                        </div>


                        <div class="col-md-6">
                            <label class="form-label">Version Name</label>
                            
                                <select class="form-control" name="version_id" required id="versionName" onchange="getpageNameByversionName(this.value)">
                                    <option value="" selected disabled>-- Select Version Name --</option>
                                    @foreach($versionNames as $versionName)
                                    <option value="{{$versionName->id}}" >{{ $versionName->version_name}}</option>
                                    @endforeach
                                </select>
                            
                        </div>


                        <div class="col-md-6">
                            <label class="form-label">Page Name</label>
                            
                                <select class="form-control" name="page_id" required id="pageName">
                                    <option value="" selected disabled>-- Select Page Name --</option>
                                    @foreach($pageNames as $pageName)
                                    <option value="{{$pageName->id}}">{{ $pageName->page_name}}</option>
                                    @endforeach
                                </select>
                            
                        </div>
                        
                       {{-- <div class="form-group row mt-2"> --}}
                                <div class="col-md-6  ">
                                <label for="" class="form-label">Price</label>
                                <input type="text"  class="form-control" name="content_price" placeholder=" Enter Price" >
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


 <script>
    function getpageNameByversionName(id)
    {
        $.ajax({
            method: "GET",
            url: "{{url('/get-page-name-by-version-name')}}",
            data: {id:id},
            type: 'JSON',
            success: function (response) {
                var select = $('#pageName');
                select.empty();
                var option = '';
                option += '<option value="" selected disabled> -- Select Page Name -- </option>';
                $.each(response, function (key, value) {
                    option += '<option value="'+value.id+'">'+value.page_name+'</option>';
                });
                select.append(option);
            }
        });
    }
</script>

@endsection



@endsection
