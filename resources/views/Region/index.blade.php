@extends('layouts.site')

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h1>Region</h1>
        </div>
        <div class="col-12 text-right mb-3">
            <a href="{{ route('regions.create') }}" class="btn btn-success btn-sm">Create</a>
        </div>
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @elseif (session('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('warning') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @elseif (session('danger'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('danger') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped text-center" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Name (English)</th>
                                    <th>Name (Uzbek)</th>
                                    <th colspan="3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regions as $region)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        @foreach ($region->translations as $translation)
                                            <td>{{ $translation->name }}</td>
                                        @endforeach
                                        <td class="d-flex justify-content-center align-items-center" style="gap: 15px">
                                            <a href="{{ route('regions.show', $region->id) }}"
                                                class="btn btn-primary btn-sm">Show</a>
                                            <a href="{{ route('regions.edit', $region->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('regions.destroy', $region->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="confirm('Are you sure you want to delete?')">Delete</button>
                                            </form>
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
