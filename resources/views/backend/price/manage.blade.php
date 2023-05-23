
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
                        <button style="margin: 5px;" class="btn btn-danger btn-xs delete-all" data-url=""><i class="dripicons-trash"></i></button>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th><span>Select All</span><br><input type="checkbox" id="check_all"></th>
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
                                    <tr id="tr_{{$price->id}}">
                                    <td><input type="checkbox" class="checkbox" data-id="{{$price->id}}"></td>
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
    @section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            
        $('#check_all').on('click', function(e) {
        if($(this).is(':checked',true))  
        {
        $(".checkbox").prop('checked', true);  
        } else {  
        $(".checkbox").prop('checked',false);  
        }  
        });

        $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
        $('#check_all').prop('checked',true);
        }else{
        $('#check_all').prop('checked',false);
        }
        });

        $('.delete-all').on('click', function(e) {
        var idsArr = [];  
        $(".checkbox:checked").each(function() {  
        idsArr.push($(this).attr('data-id'));
        });  
        if(idsArr.length <=0)  
        {  
        alert("Please select atleast one record to delete.");  
        }  
        else 
        {  if(confirm("Are you sure, you want to delete the selected price?")){  
var strIds = idsArr.join(","); 
$.ajax({
url: "{{ route('price.delete-multiple-price') }}",
type: 'DELETE',
headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
data: 'ids='+strIds,
success: function (data) {
if (data['status']==true) {
$(".checkbox:checked").each(function() {  
$(this).parents("tr").remove();
});
toastr.success(data.success);
$('#check_all').prop('checked',false);



} else {
alert('Whoops Something went wrong!!');
}
},
error: function (data) {

}
});
}  
}  
});
   
});
</script>
    @endsection
@endsection



