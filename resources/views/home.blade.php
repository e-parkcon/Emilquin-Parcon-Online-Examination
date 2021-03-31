@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Song Lyrics</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    List of Songs
                </div>

                <div class="card-body">

                    <div class="mb-2">
                        <a href="{{ route('song.create') }}" class="btn btn-sm btn-success">Add New Song</a>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tbl_songs" style="width: 100%">
                            <thead>
                                <tr>
                                    <th width="20%">Title</th>
                                    <th width="15%">Artist</th>
                                    <th width="10%">Created At</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
