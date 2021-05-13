@if(isset($errors))
@if ($errors->any())
<div class="alert alert-danger m-0">
    <ul class="m-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endif
