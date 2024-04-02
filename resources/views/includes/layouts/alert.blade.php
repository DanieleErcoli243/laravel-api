@session('message')
<div class="alert">
    <p>{{ $value }}</p>
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
</div>
 @endsession