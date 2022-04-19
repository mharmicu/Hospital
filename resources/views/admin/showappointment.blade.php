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
             <div align="center" style="padding-top: 50px; padding-left: 0px">

                @if(session()->has('message'))

                 <div class="alert alert-warning">
                     <button type="button" class="close" data-dismiss="alert">x</button>
                     {{session()->get('message')}}
                 </div>

                 @endif

                 <form action="{{url('search')}}" method="get">

                    <a class="btn btn-success float-right py-2 my-3"><input type="submit" class="btn" value="Search"></a>
                     <input type="text" class="text-dark float-right py-2 rounded my-3 mx-2" placeholder=" Search... " name="searchTerm" />

                 </form>

                 <br><br><br>


                 <table>
                     <tr style="background-color: #002D62;">
                         <th style="padding: 20px;">Customer Name</th>
                         <th style="padding: 10px;">Email</th>
                         <th style="padding: 20px;">Phone</th>
                         <th style="padding: 20px;">Doctor Name</th>
                         <th style="padding: 20px;">Dates</th>
                         <th style="padding: 20px;">Message</th>
                         <th style="padding: 20px;">Status</th>
                         <th colspan="2" style="padding: 10px; text-align: center;">Actions</th>
                         <th style="padding: 10px;">Email</th>
                     </tr>

                     @foreach($data as $appoint)

                     <tr align="center" style="background-color: whitesmoke; color: black;">
                         <td>{{$appoint->name}}</td>
                         <td>{{$appoint->email}}</td>
                         <td>{{$appoint->phone}}</td>
                         <td>{{$appoint->doctor}}</td>
                         <td>{{$appoint->date}}</td>
                         <td>{{$appoint->message}}</td>
                         <td>{{$appoint->status}}</td>
                         <td><a class="btn btn-success" href="{{url('approved', $appoint->id)}}">Approved</a></td>
                         <td><a class="btn btn-danger" href="{{url('cancelled', $appoint->id)}}">Canceled</a></td>
                         <td><a class="btn btn-primary" href="{{url('emailview', $appoint->id)}}">Send Mail</a></td>
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