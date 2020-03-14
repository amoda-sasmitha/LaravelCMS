<section class="pb-4  pt-4 bg-gray">
    <div class="container">
        <div class="row px-md-5">
            <div class="col-lg-12">
                <h3 class="py-4 text-dark">Trip Booking Form</h3>
                <form method="post" action="{{url('booking')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 col-sm-12 pb-3">
                            <h3 class="small text-dark pb-2 font-weight-bold">Full Name </h3>
                            <input class="form-control"  name="name" 
                                placeholder="Enter Full Name" type="text">
                        </div>
                        <div class="col-md-4 col-sm-12 pb-3">
                            <h3 class="small text-dark pb-2 font-weight-bold">Nationality </h3>
                            <input class="form-control"  name="nationality" 
                                placeholder="Enter Nationality" type="text">
                        </div>
                        <div class="col-md-6 col-sm-12 pb-3">
                            <h3 class="small text-dark pb-2 font-weight-bold">Phone No </h3>
                            <input class="form-control"  name="phone" 
                                placeholder="Enter Phone No with Country Code" type="text">
                        </div>
                        <div class="col-md-6 col-sm-12 pb-3">
                            <h3 class="small text-dark pb-2 font-weight-bold">Email </h3>
                            <input class="form-control"  name="email" 
                                placeholder="Enter Email" type="email">
                        </div>
                        <div class="col-md-6 col-sm-12 pb-3">
                            <h3 class="small text-dark pb-2 font-weight-bold">Arrival Date </h3>
                            <input class="form-control"  name="adate" 
                                placeholder="Enter Phone No with Country Code" type="date">
                        </div>
                        <div class="col-md-6 col-sm-12 pb-3">
                            <h3 class="small text-dark pb-2 font-weight-bold">Departure Date </h3>
                            <input class="form-control"  name="ddate" 
                                placeholder="Enter Email" type="date">
                        </div>
                        <div class="col-md-4 col-sm-12 pb-3">
                            <h3 class="small text-dark pb-2 font-weight-bold">Number of Adults </h3>
                            <input class="form-control"  name="adultcount" 
                                placeholder="Enter Adult Count" type="number">
                        </div>
                        <div class="col-md-4 col-sm-12 pb-3">
                            <h3 class="small text-dark pb-2 font-weight-bold">Number of Children </h3>
                            <input class="form-control"  name="childrencount" 
                                placeholder="Enter Adult Count" type="number">
                        </div>
                        <div class="col-md-12 col-sm-12 pb-3">
                            <h3 class="small text-dark pb-2 font-weight-bold">Special Notes </h3>
                            <textarea class="form-control" name="notes" 
                            rows="5" placeholder="Enter Special Notes"></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12 pb-3">
                            <button class="btn btn-success px-4" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </section>