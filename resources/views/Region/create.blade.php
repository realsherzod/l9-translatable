@extends('layouts.site')

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h1>Create region</h1>
        </div>
        <div class="col-12 text-right mb-3">
            <a href="{{ route('regions.index') }}" class="btn btn-warning btn-sm">Back</a>
        </div>
        <div class="col-12">
            <div class="card">
                <form class="needs-validation" autocomplete="off" action="{{ route('regions.store') }}" method="post"
                    enctype="multipart/form-data" novalidate="">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name (Uzbek)</label>
                            <input type="text" name="name_uzb" value="{{ old('name_uzb') }}" class="form-control"
                                id="name_uzb" required placeholder="Region Name (Uzbek)">
                            <div class="invalid-feedback">
                                Please enter a region name.
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Name (English)</label>
                            <input type="text" name="name_eng" value="{{ old('name_eng') }}" class="form-control"
                                id="name_eng" required placeholder="Region Name (English)">
                            <div class="invalid-feedback">
                                Please enter a region name.
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
@section('js')
    <script>
        $('#name_uzb').on('input', function() {
            translateText('name_uzb', 'name_eng', 'uz', 'en');
        });
    </script>
@endsection
