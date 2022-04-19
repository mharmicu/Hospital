 <!DOCTYPE html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->

     @include('admin.css')

 </head>

 <body>
     <div class="container-scroller">
         <!-- partial:partials/_sidebar.html -->


         @include('admin.sidebar')
         <!-- partial -->

         @include('admin.navbar')

         <!-- partial -->
         <div class="container-fluid page-body-wrapper">
             <div align="center" style="padding-top:50px;">

                 @if(session()->has('message'))

                 <div class="alert alert-danger">
                     <button type="button" class="close" data-dismiss="alert">x</button>
                     {{session()->get('message')}}
                 </div>

                 @endif

                 <a href="{{ route('downloadDoctors') }}" class="float-right py-2 px-4 rounded my-3 btn btn-info">Generate PDF</a>
                 <a href="{{ route('getDoctors') }}" class="float-right py-2 px-4 rounded my-3 mx-3 btn btn-success">Preview PDF</a>
                 <br><br><br>
                 <table>
                     <tr style="background-color: black;">
                         <th style="padding: 40px;">Doctor Name</th>
                         <th style="padding: 40px;">Phone</th>
                         <th style="padding: 40px;">Speciality</th>
                         <th style="padding: 40px;">Room No</th>
                         <th style="padding: 40px;">Image</th>
                         <th colspan="2" style="padding: 10px; text-align: center;">Actions</th>
                     </tr>

                     @foreach($data as $doctor)
                     <tr align="center" style="background-color: whitesmoke; color: black;">
                         <td>{{$doctor->name}}</td>
                         <td>{{$doctor->phone}}</td>
                         <td>{{$doctor->speciality}}</td>
                         <td>{{$doctor->room}}</td>
                         <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>


                         <td><a onclick="return confirm('Are you sure you want to delete this? This action cannot be undo.')" class="btn btn-danger" href="{{url('deletedoctor', $doctor->id)}}">Delete</a></td>
                         <td><a class="btn btn-success" href="{{url('updatedoctor', $doctor->id)}}">Update</a></td>
                     </tr>

                     @endforeach

                 </table>
                 <br>
                 <span>
                     {{ $data->links()}}
                 </span>

             </div>
         </div>
         <!-- container-scroller -->
         <!-- plugins:js -->


         @include('admin.script')
         <!-- End custom js for this page -->
 </body>

 </html>