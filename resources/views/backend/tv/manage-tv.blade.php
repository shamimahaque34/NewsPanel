@extends('backend.master')

@section('title')
   Manage Tv Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Tv Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Tv</h4>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <button style="margin: 5px;" class="btn btn-danger btn-xs delete-all" data-url=""><i class="dripicons-trash"></i></button>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th><span>Select All</span><br><input type="checkbox" id="check_all"></th>
                                <th>SN</th>
                                <th>Title</th>
                                <th>File Name</th>
                                <th>Video Google Drive Link</th>
                                <th>Reporter Name</th>
                                <th>Bkash No</th>
                                <th>Tv Name</th>
                                <th>Division</th>
                                <th>District</th>
                                <th>Police Station</th>
                                <th>Tv Count </th>
                                <th>Content Price</th>
                                {{-- <th>Content Price Word</th> --}}
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tvs as $tv)
                                <tr>
                                    <tr id="tr_{{$tv->id}}">
                                    <td><input type="checkbox" class="checkbox" data-id="{{$tv->id}}"></td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $tv->title}}</td>
                                    <td>{{ $tv->file_name}}</td>
                                    <td>{{ $tv->video_google_drive_link}}</td>
                                    <td>{{ $tv->reporter}}</td>
                                    <td>{{ $tv->bkash_no}}</td>
                                    <td>
                                        {{ $tv->tv_name}}


                                        {{-- @php
                                         $tv_names = json_decode($instituteName->institute_name)
                                        
                                        @endphp
                                       
                                       
                                        @foreach( $tv_names  as $ete)
                                        {{ $ete}}
                                        @endforeach --}}
                                    </td>
                                    <td>{{ $tv->divisions}}</td>
                                    <td>{{ $tv->districts}}</td>
                                    <td>{{ $tv->police_station}}</td>
                                    <td>{{ $tv->newspaper_count}}</td>
                                    {{-- <td>{{ $printNewsPaper->price_count}}</td>
                                    <td>{{ $printNewsPaper->hit_count}}</td> --}}
                                    <td>{{ $tv->content_price}}</td>
                                    {{-- <td>{{ $tv->content_price_word}}</td> --}}
                                    <td>{{ $tv->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <div class=d-flex>

                                            @if($tv->status == 0)
                                            <a href="{{route('tv.tv-status', ['id' => $tv->id])}}" class="btn btn-warning btn-sm ms-2">
                                                <i class="dripicons-arrow-down"></i>
                                            </a>
                                        @else
                                            <a href="{{route('tv.tv-status', ['id' => $tv->id])}}" class="btn btn-success btn-sm ms-2">
                                                <i class="dripicons-arrow-up"></i>
                                            </a>
                                        @endif
                                        {{-- <a href="{{ route('print-news-paper-info.edit',  ['id' => $printNewsPaper->id]) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a> --}}
                                       
                                        {{-- <a href="" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Are you sure to delete this..');">
                                            <i class="dripicons-trash"></i>
                                        </a> --}}

                                      
                                       
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
        {  if(confirm("Are you sure, you want to delete the selected tvs?")){  
var strIds = idsArr.join(","); 
$.ajax({
url: "{{ route('tv.delete-multiple-tv') }}",
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

