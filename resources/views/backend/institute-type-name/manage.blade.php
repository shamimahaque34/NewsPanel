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
                        <button style="margin: 5px;" class="btn btn-danger btn-xs delete-all" data-url=""><i class="dripicons-trash"></i></button>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th><span>Select All</span><br><input type="checkbox" id="check_all"></th>
                                <th>SN</th>
                                <th> Institute Type Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($instituteTypeNames as $instituteTypeName)
                                <tr>
                                    <tr id="tr_{{$instituteTypeName->id}}">
                                    <td><input type="checkbox" class="checkbox" data-id="{{$instituteTypeName->id}}"></td>
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
        {  if(confirm("Are you sure, you want to delete the selected institute type name?")){  
var strIds = idsArr.join(","); 
$.ajax({
url: "{{ route('institute-type-name-info.delete-multiple-institute-type-name-info') }}",
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



