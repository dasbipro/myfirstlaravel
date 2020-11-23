<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Api</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .m-t-10 {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-8 m-t-10">
            <div class="form-group">
                <select class="form-control" name="" id="division">
                    <option value="">Select Division</option>
                    @foreach ($divisions  as  $d)
                    <option value="{{$d->id}}">{{$d -> name}}</option>   
                    @endforeach
                    {{-- <option value="">Dhaka</option>
                    <option value="">Chittagong</option>
                    <option value="">Sylhet</option> --}}
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="" id="district">
                    <option value="">Select District</option>
                    {{-- <option value="">Coxsbazar</option>
                    <option value="">Sitakunda</option>
                    <option value="">Gazipur</option>
                    <option value="">Narayanganj</option>
                    <option value="">Habiganj</option>
                    <option value="">Sreemangal</option> --}}
                </select>
            </div>
        </div>
        <div class="col-md-8">
            <form action="" id="submit_div_form">
                <div class="form-group">
                    <label for="">Enter Division</label>
                    <input class="form-control" type="text" name="" id="div_name">

                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- Get Api using REST API --}}
    <script>
            $("#division").change(function(){
                var div = $("#division").val();
            $.ajax({
            url: "/api/getdistricts/"+div,                                        //url always fix, var div used here with +
            dataType: 'json',                                                   //data type always fix
            success: function(res){
                $('#district').html('<option value="">Select District</option>');
                var len_dis = res.districts.length;
                for(i=0 ; i<len_dis; i++){
                    var str = '<option value=" '+res.districts[i].id+' ">'+res.districts[i].name+'</option>';
                    $('#district').append(str);
                }
            }
            });
        });
    </script>

{{-- post API using REST API --}}
    <script>
        $("#submit_div_form").submit(function(e) {
                        e.preventDefault();                       //default kono event takle ignore koro
                        var name = $("#div_name").val();
                $.ajax({
                            type: "POST",
                            url: "/api/insert-division",
                            // data: form.serialize(),
                            data : {
                                    'division' : name,
                                    },
                            dataType : "json",
                            success: function(res)
                            {
                                if(res.error==false){
                                    $('#div_name').val = "";
                                    alert("Successfully Inserted");
                                }
                            }
        });
    });
    </script>
</body>
</html>