@extends('backend.master')

@section('title')
    Add Institute Type Name Info
@endsection



@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Institute Type Name Info', 'child' =>'Add'])
@endsection



@section('body')
<section>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                   Add Institute Type Name Info
                </div>
                <div class="card-body">
                    <form action="{{ route('institute-type-name-info.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                       <div class="form-group row mt-2">
                                <div class="col-md-6  ">
                                <label for="" class="form-label"> Institute Type Name</label>
                                <input type="text"  class="form-control" name="type_name" placeholder=" Enter Institute Type Name">
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
