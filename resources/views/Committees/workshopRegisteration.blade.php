@extends('layout.master')
@section('title')
    Open Source Community | Event
    @endsection
    @section('cssFile')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
   /* body{
   background-image: url("img/Registertion_Page.png");
   background-size: contain;
   margin: 0px;
   padding: 0px;
   margin-top: 100px;
  } */

    .btn{
        width: 50%;
        text-align:center;
        color: white;
        font-weight: bold;
        margin-left: 100px;
    }

    .register-form{
      margin-left: 10%;
      margin-top: 20vh !important;
      /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
      /* background-color:black; */

    }
    .box{


    }
    .form-control{
      border-radius: 15px;

    }
    #container_2{
      border-top-left-radius: 15%;
      border-bottom-left-radius: 15%;
      box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2), 0 30px 20px 0 rgba(0, 0, 0, 0.19);
    }
    #container_3{
        box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2), 0 30px 20px 0 rgba(0, 0, 0, 0.19);
      border-bottom-right-radius: 15%;
      border-top-right-radius: 15%;
    }
    /* div.row {

       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      box-shadow:2px 4px 8px 0 rgba(0, 0, 0, 0.2);

  } */
  .mb-4{
      margin-top: 20px;
      font-size: 40px;
      font-family: 'Sofia';
      font-weight: bold;
  }
  .des{
      text-align: center;
      margin-top: 50px;
      margin-bottom: 240px;
      color: white;
  }
.p-4{
  font-size: 25px
}
.bootstrap-container-modify{
  max-width: 95%;
} 
header .container{
  max-width: 95%;
}
.logo:hover{
  color: transparent;
}
</style>
@endsection
@section('content')
<div class="register-form mt-4 mb-3">
      <div class="container">
            <div class="row box">
              <div id='container_2'class="col-md-5 d-none d-md-block bg-dark">
                  <h3 class="des"> </h3>
                  <img src="{{asset('img/Imgg.png')}}">
                </div>
              <div id='container_3'  class="col-md-5 mr-0 bg-white text-warning">
                <center><p class="h4 mb-4">Registeration</p></center>
              @if (Session::has('success'))
              <div class="alert alert-success" role="alert">
                  {{Session::get('success')}}
              </div>
              @endif
             
              @if (Session::get('errors'))
                  <div class="alert alert-danger" role="alert">
                      {{Session::get('errors')}}
                  </div>
              @endif

                  <form action="{{route('create.workshop.registration')}}" method="POST" class="p-4 text-warning">
                    @csrf <div class="form-group">
                        <label for="name"><i ></i> Name *</label>
                        <input type="text" placeholder="name"class="form-control" name="name" required>
                        @error('name')
                  <div class="text-danger display-9">{{ $message }}</div>
                  @enderror
                    </div>
                    <div class="form-group">
                      <label for="email"><i ></i> Email *</label>
                      <input type="email" class="form-control" placeholder=" ****@gmail.com" name="email"required>
                      @error('email')
                  <h6 class="text-danger">{{ $message }}</h6>
                  @enderror
                  </div>

                    <div class="form-group">
                        <label for="pwd"> Mobile Number *</label>
                        <input type="tel" name="studentPhone" class="form-control" title="الرجاء ادخل  رقم الهاتف" placeholder="01*********" pattern="[0-9]{11}" required>
                        @error('studentPhone')
                    <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                    <label >College *</label>
                    <input type="text" class="form-control" name="studentCollege" required>
                    @error('studentCollege')
                    <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    </div>
                    <div class="col-md-6">
                      <label > Year *</label>
                       <select class="form-control"  name="studentYear" required>
                            <option selected="selected" hidden></option>
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        @error('studentYear')
                          <h6 class="text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12 ">
                    
                        <label> workshop Commitee</label>
                         <select class="form-control" name="workshop_name" id="workshop_name" required>
                          <option selected="selected" hidden></option>
                              <option value="Web">Web</option>
                              <option value="Blender">Blender</option>
                              <option value="Linux">Linux</option>
                          </select>
                          @error('workshop_name')
                          <h6 class="text-danger">{{ $message }}</h6>
                          @enderror
                    </div>
                  
                    <div class="col-md-12">
                    
                        <label> Date & Time *</label>
                        <select class="form-control" name="studentDateA" id="studentDateA"required>
                        </select>
                        @error('studentDateA')
                        <h6 class="text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                      
                    </div>
                    <button style="margin-top: 20px" type="submit" class="btn">Submit</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
        <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


    <script>

$(document).ready(function () {


    document.getElementById("workshop_name").onchange=function()
    {
        var index = this.selectedIndex;
        $.ajax({
            type: "get",
            url: "{{route('appointmentsAjax')}}",
            data:{
                '_token':"{{csrf_token()}}",
                'name':index,
            },
            success: function (response) {

                // console.log(response);

                var cartonaDate='<option selected="selected" hidden></option>';
                // var cartonaTime=`<option selected="selected" hidden></option>`;
                if (response.length > 0)
                {
                    response.forEach(element => {
                        if(element.numberOfSeats > 0)
                        {
                            cartonaDate+=`<option value="${element.date +' '+'(' +element.time +')' +'#'+element.id}">${element.date}  (${element.time})</option>`;
                            // cartonaTime+=`<option value="${element.time}">${element.time}</option>`;
                        }
                    });
                    let counter = 0;
                    for(let i = 0; i < response.length; i++){
                      if(response[i].numberOfSeats <= 0){
                        counter++;
                      }
                    }
                    if(counter == response.length){
                      cartonaDate+=`<option value="waitting" disabled selected>waitting</option>`;
                      // cartonaTime+=`<option value="waitting" disabled selected>waitting</option>`;
                      
                    }


                    $("#studentDateA").html(cartonaDate) ;
                    // $("#studentTimeA").html(cartonaTime) ;
                }
                else
                {
                    cartonaDate+=`<option value="waitting" disabled selected>waitting</option>`;
                    // cartonaTime+=`<option value="waitting" disabled selected>waitting</option>`;
                    $("#studentDateA").html(cartonaDate) ;
                    // $("#studentTimeA").html(cartonaTime) ;
                }

            },
            error:function(reject){
                console.log(reject);
            }
        });
    };

});

</script>

@endsection
  