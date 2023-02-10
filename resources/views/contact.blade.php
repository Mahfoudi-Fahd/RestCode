<form action="{{route('contact.store')}}" method="post">
    @csrf
<div>
<label for="username" name="username">Username</label>

<div class="">
    <input id="username" type="text" class="form-control" name="username">
</div>

<label for="email" name="email">Email</label>
<div class="">
    <input id="email" type="email" class="form-control" name="email">
</div>
<label for="message">Message</label>

<div>
    <input id="message" type="text" name="message">
</div>
<button type="submit" class="">
    <i class="fa fa-btn fa-sign-in"></i>submit
</button>
</div>
</form>
