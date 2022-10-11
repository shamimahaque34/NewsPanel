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
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
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
                                <th>Content Price Word</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tvs as $tv)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $tv->title}}</td>
                                    <td>{{ $tv->file_name}}</td>
                                    <td>{{ $tv->video_google_drive_link}}</td>
                                    <td>{{ $tv->reporter}}</td>
                                    <td>{{ $tv->bkash_no}}</td>
                                    <td>
                                        {{ $tv->tv_name}}


                                        {{-- @php
                                         $newspaper_names = json_decode($printNewsPaper->newspaper_name)
                                        
                                        @endphp
                                       
                                       
                                        @foreach( $newspaper_names  as $ete)
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
                                    <td>{{ $tv->content_price_word}}</td>
                                    <td>{{ $tv->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <div class=d-flex>

                                            @if($tv->status == 0)
                                            <a href="{{route('tv.tv-status', ['id' => $tv->id])}}" class="btn btn-warning btn-sm ms-2">
                                                <i class="fas fa-arrow-alt-circle-up"></i>
                                            </a>
                                        @else
                                            <a href="{{route('tv.tv-status', ['id' => $tv->id])}}" class="btn btn-success btn-sm ms-2">
                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                            </a>
                                        @endif
                                        {{-- <a href="{{ route('print-news-paper-info.edit',  ['id' => $printNewsPaper->id]) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a> --}}
                                       
                                        <a href="{{route('tv.delete', ['id' =>  $tv->id])}}" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Are you sure to delete this..');">
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

