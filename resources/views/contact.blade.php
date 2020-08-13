<h3>Advertise with us</h3>
<form action="/contact" method="POST">
@csrf

<div class="form-group input-group-sm">
    <label for="">email <span class="text-danger">*</span></label>
    <input type="email" class="form-control" name="email" required>
</div>

<div class="form-group input-group-sm">
    <label for="">First Name <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="fname" required>
</div>

<div class="form-group input-group-sm">
    <label for="">Last Name <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="lname" required>
</div>

<div class="form-group input-group-sm">
    <label for="">Phone<span class="text-danger">*</span></label>
    <input type="tel" class="form-control" name="phone" required>
</div>

<div class="form-group input-group-sm">
    <label for="">Message<span class="text-danger">*</span></label>
   <textarea name="message" id="" cols="30" rows="4" class="form-control" required></textarea>
</div>

    <button type="submit" class="btn btn-success btn-sm"><span class="mx-4">Send Message</span></button>

</form>