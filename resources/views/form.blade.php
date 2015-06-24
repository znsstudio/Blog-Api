@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/article" method="post">
	
<input type="text" name="title">

<input type="text" name="content">

<input type="submit">

</form>