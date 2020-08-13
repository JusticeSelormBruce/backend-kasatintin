
<!-- Button trigger modal -->
<button type="button" class="btn text-light bg-dark  " data-toggle="modal" data-target="#exampleModalLong">
    <span class=" mx-5">Write for us</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
              
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="jumbotron bg-dark">
                   
                    
                    <span class="h5 text-light text-lowercase pb-2">  Kasatintin is the fastest growing digital news media in Ghana and Africa
                        <br>
                        You can be part of our creative team as a <b>contributer</b> or a <b> volunteer writer</b>
                        <br>
                        Send us an email <b>Create one for this purpose</b></span>

                    <form action="/contact" method="POST" class="pt-3">
                        @csrf
                        
                        <div class="form-group input-group-sm">
                            <input type="email" class="form-control" name="email" required placeholder="email*">
                        </div>
                        
                        <div class="form-group input-group-sm">
                            <input type="text" class="form-control" name="fname" required placeholder="First Name*">
                        </div>
                        
                        <div class="form-group input-group-sm">
                          
                            <input type="text" class="form-control" name="lname" required placeholder="Last Name*">
                        </div>
                        
                        <div class="form-group input-group-sm">
                            
                            <input type="tel" class="form-control" name="phone" required placeholder="Phone*">
                        </div>
                        
                        <div class="form-group input-group-sm">
                         
                           <textarea name="message" id="" cols="30" rows="4" class="form-control" required placeholder="message"></textarea>
                        </div>
                        
                            <button type="submit" class="btn btn-success btn-sm"><span class="mx-4">Send Message</span></button>
                        
                        </form>

                </div>
            </div>

        </div>
    </div>
</div>

