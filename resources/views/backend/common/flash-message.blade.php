
@if(session()->has('success'))
    <div class="alert alert-success flashMessage">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('success') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger flashMessage">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('error') }}
    </div>
@endif
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script >
    // for alert message disppper after 3 sec
    $(document).ready(function(){
        setTimeout(function(){$('.flashMessage').fadeOut();}, 4000);
    });
</script>