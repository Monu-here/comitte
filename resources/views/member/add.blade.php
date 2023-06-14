@extends('layout.index')
@section('content')
@include('layout.sidebar')
    <div class="mb-3">
        <form method="POST" action="{{ route('member.add', $comitte) }}" enctype="multipart/form-data">

        {{-- <form action="{{route('member.add')}}" method="POST" enctype="multipart/form-data"> --}}
            @csrf
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4" style="margin-left: 25%">

                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="" class="form-control">
                            </div>
                                 <div class="mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                <label for="document">Document</label>
                                <select name="doc" id="" class="form-control">
                                    <option value="Driving licence">Driving licence</option>
                                    <option value="Citizenship">Citizenship</option>
                                    <option value="Birthcertificate">Birthcertificate</option>
                                    <option value="Passport">Passport</option>
                                </select>
                                </div>
                                <div class="mb-3">
                                <label for="doc-no">Document Number</label>
                                <input type="number" name="doc_no" id="" class="form-control">
                                </div>
                                <div class="mb-3">
                                <label for="image">Document Image</label>
                                <input type="file" name="image" id="" class="photo form-control">
                                </div>
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <style>
        .container{
            max-width:800px;
          margin: 50px auto;
          background-color: #fff;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          padding: 40px;
        }
    </style>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="{{ asset('admin/plugins/drophify/js/dropify.min.js') }}"></script>
<script>
    $(function() {
        $('.photo').dropify();
    });
</script>
@endsection
