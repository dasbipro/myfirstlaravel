
        @extends('admin.layouts.default')
        @section('abc')

        <main>
                <div class="container-fluid">

                <h1 class="mt-4">Multiple Image Upload</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Multiple Image Uploaded</li>
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
                    <h2>Multiple Image Upload</h2>
                <div>
        <form method="post" action="{{URL::to('upload_image')}}" enctype="multipart/form-data">
        {{csrf_field()}}
                <div>
                <input  type="file" multiple name="filename[]" id="file-input" class="form-control">
                <div id="preview"></div>
                </div>
                <button type="submit" class="btn btn-info" style="margin-top:12px"><i class="glyphicon glyphicon-check"></i> Submit</button>
        </form>
        <br><hr>

        <h4><i class="glyphicon glyphicon-picture"></i> Display Data Image    </h4>
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr><th>#</th>
                <th>Picture</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data as $image)
            <tr><td>{{$image->id}}</td>
                <td> <?php foreach (json_decode($image->filename)as $picture) { ?>
                        <img src="{{ asset('/uploads/original/'.$picture) }}" style="height:250px; width:200px"/>
                        <?php } ?>
                </td>
            </tr>
                @endforeach
            </tbody>
            
        </table>
                </div>
                </div>



        </main>

        @endsection

        @section('myscript')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


        <script>
    function previewImages() {

var $preview = $('#preview').empty();
if (this.files) $.each(this.files, readAndPreview);

function readAndPreview(i, file) {
    
    if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
        return alert(file.name +" is not an image");
    } // else...
    
    var reader = new FileReader();

    $(reader).on("load", function() {
        $preview.append($("<img/>", {src:this.result, height:100}));
    });

    reader.readAsDataURL(file);
}

}

$('#file-input').on("change", previewImages);
        </script>

        @endsection
    