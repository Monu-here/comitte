@extends('layout.index');
@section('content')
@include('layout.sidebar')

    <form action="{{route("comitte.add")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="margin-left: 25%">
                        <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                        <label for="country">Country</label>
                        <input type="text" name="country" id="country" class="form-control">
                        </div>
                        <div class="mb-3">

                        <label for="state">State</label>
                        <select name="state" id="" class="form-control">
                            <option value="1" class="form-control">1</option>
                            <option value="2" class="form-control">2</option>
                            <option value="3" class="form-control">3</option>
                            <option value="4" class="form-control">4</option>
                            <option value="5" class="form-control">5</option>
                            <option value="6" class="form-control">6</option>
                            <option value="7" class="form-control">7</option>
                        </select>
                        </div>
                        <div class="mb-3">

                        <label for="district">District</label>
                            <input type="text" name="district" id="district" class="form-control">
                        </div>
                        <div class="mb-3">

                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="form-control">
                        </div>
                  <button type="submit" class="btn btn-primary">Save</button>

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
      box-shadow: 0 0 10px rgba(27, 26, 26, 0.1);
      padding: 40px;
    }
</style>

    </div>
   </div>
@endsection
