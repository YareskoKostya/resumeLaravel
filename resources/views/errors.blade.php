@if($errors->any())
    <div class="container">
        <div class="col-5">
            <div class="alert alert-danger" align="left">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif