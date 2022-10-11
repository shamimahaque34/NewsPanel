@extends('backend.master')

@section('title')
   Manage Online News Paper Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Online News Paper Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Online News Paper</h4>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Caption</th>
                                <th>Main Description</th>
                                <th>Reporter Name</th>
                                <th>Bkash No</th>
                                <th>Image</th>
                                <th>News Paper Name</th>
                                <th>Division</th>
                                <th>District</th>
                                <th>Police Station</th>
                                <th>News Paper Count </th>
                                <th>Content Price</th>
                                <th>Content Price Word</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($onlineNewsPapers as $onlineNewsPaper)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $onlineNewsPaper->title}}</td>
                                    <td>{{ $onlineNewsPaper->sub_title}}</td>
                                    <td>{{ $onlineNewsPaper->caption}}</td>
                                    <td>{{ $onlineNewsPaper->main_description}}</td>
                                    <td>{{ $onlineNewsPaper->reporter}}</td>
                                    <td>{{ $onlineNewsPaper->bkash_no}}</td>
                                    <td>
                                        {{-- @php
                                        $image= DB::table('print_news_papers')->get(); --}}
                                        //  dd($image);
                                        //  dd(json_encode($image));
                                        
                                       
                                        //  dd($images);

                                     {{-- @endphp  --}}

                                         @foreach(json_decode($onlineNewsPaper->image) as $ete)
                                         {{-- dd({{asset($ete->image)}}); --}}
                                        
                                            <img src="{{asset($ete)}}" alt="ete" height="60" width="80"/>
                                            
                                                <a href="{{route('download',$ete)}}"> Download</a>

                                            

                                        @endforeach


                                       
                                    </td>
                                    <td>
                                        {{ $onlineNewsPaper->newspaper_name}}


                                        {{-- @php
                                         $newspaper_names = json_decode($printNewsPaper->newspaper_name)
                                        
                                        @endphp
                                       
                                       
                                        @foreach( $newspaper_names  as $ete)
                                        {{ $ete}}
                                        @endforeach --}}
                                    </td>
                                    <td>{{ $onlineNewsPaper->divisions}}</td>
                                    <td>{{ $onlineNewsPaper->districts}}</td>
                                    <td>{{ $onlineNewsPaper->police_station}}</td>

                                    <td>{{ $onlineNewsPaper->newspaper_count}}</td>
                                    {{-- <td>{{ $printNewsPaper->price_count}}</td>
                                    <td>{{ $printNewsPaper->hit_count}}</td> --}}
                                    <td>{{ $onlineNewsPaper->content_price}}</td>
                                    <td>{{ $onlineNewsPaper->content_price_word}}</td>
                                    <td>{{ $onlineNewsPaper->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <div class=d-flex>

                                            @if($onlineNewsPaper->status == 0)
                                            <a href="{{route('online-news-paper.online-news-paper-status', ['id' => $onlineNewsPaper->id])}}" class="btn btn-warning btn-sm ms-2">
                                                <i class="fas fa-arrow-alt-circle-up"></i>
                                            </a>
                                        @else
                                            <a href="{{route('online-news-paper.online-news-paper-status', ['id' => $onlineNewsPaper->id])}}" class="btn btn-success btn-sm ms-2">
                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                            </a>
                                        @endif
                                        {{-- <a href="{{ route('print-news-paper-info.edit',  ['id' => $printNewsPaper->id]) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a> --}}
                                       
                                        <a href="{{route('online-news-paper.delete', ['id' =>  $onlineNewsPaper->id])}}" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Are you sure to delete this..');">
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

