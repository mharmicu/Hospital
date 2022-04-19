<!DOCTYPE html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->

     <base href="/public">

     <style>
         label {
             display: inline-block;

             width: 200px;
         }
     </style>

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


             <div class="container" align="center" style="padding-top: 100px;">

                 @if(session()->has('message'))

                 <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert">x</button>
                     {{session()->get('message')}}
                 </div>

                 @endif

                 <form action="{{url('sendemail',$data->id)}}" method="POST">

                     @csrf

                     <div style="padding: 15px;">

                         <label>Greeting</label>
                         <input type="text" style="color:black;" name="greeting"  required="" placeholder="Good day..">

                     </div>

                     <div style="padding: 15px;">

                         <label>Body</label>
                         
                         <textarea name="body" style="color:black;" rows="6" placeholder="Enter message.." required></textarea>

                     </div>

                     

                     <div style="padding: 15px;">

                         <label>Action Text</label>
                         <input type="text" style="color:black;" name="actiontext"  required="" placeholder="Open this to view..">

                     </div>

                     <div style="padding: 15px;">

                         <label>Action URL</label>
                         <input type="text" style="color:black;" name="actionurl"  required="" placeholder="https://www.facebook.com/">

                     </div>
 
                     <div style="padding: 15px;">

                         <label>End Part</label>
                         <input type="text" style="color:black;" name="endpart "  required="" placeholder="Thank you..">

                     </div>

                     

                     <div style="padding: 15px;">


                         <a class="btn btn-success"><input type="submit" class="btn ">
                         </a>

                     </div>


                 </form>
             </div>

         </div>
         <!-- container-scroller -->
         <!-- plugins:js -->


         @include('admin.script')
         <!-- End custom js for this page -->
 </body>

 </html>