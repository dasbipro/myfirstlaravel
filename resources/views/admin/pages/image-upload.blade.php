
        @extends('admin.layouts.default')
        @section('abc')

        <main>
            <div class="container-fluid">

                <h1 class="mt-4">Image Upload</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Image Upload</li>
                </ol>

                <div>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
                <br>

                
                <div>
                    <h2>Upload Image Using Intervention</h2>
                <div>
                    <form method="post" action="{{URL::to('upload')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="filename" id="picture">
                        <br>
                        <img width="250px" height="250px" src="" id="preview" alt="">
                        <br>
                        <input type="submit" value='upload'>
                    </form>
                    <br>
                    @foreach ($data as $im)
                    <div style="padding: 30px; float: left">
                    <img width="250px" src="{{asset('uploads/original/'.$im->filename)}}" alt="">
                </div>
                    @endforeach
                </div>
                            </div>


            </div>
        </main>

        @endsection

        @section('myscript')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $("#picture").change(function() {
            readURL(this);
            });
            function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
            }
        </script>

        @endsection
