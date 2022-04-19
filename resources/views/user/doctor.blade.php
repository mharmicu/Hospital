<div class="page-section">
        <div class="container text-center"> 
        <h1 class="display-4">Our Doctors</h1>

            <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach($doctor as $doctors)
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img style="height: 300px !important;" src="doctorimage/{{$doctors->image}}" alt="">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">{{$doctors->name}}</p>
                            <span class="text-sm text-dark">{{$doctors->speciality}}</span>
                        </div>
                    </div>
                </div>

                @endforeach
                
               
            </div>
        </div>
    </div>