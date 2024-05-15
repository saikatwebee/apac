@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-inverse-danger border-0 alert-dismissible fade show border-radius-none mb-3" uk-alert>
            {{-- <button type="button text-white" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-inverse-success border-0 alert-dismissible fade show border-radius-none" uk-alert>
        {{-- <button type="button text-white" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-inverse-danger border-0 alert-dismissible fade show border-radius-none" uk-alert>
        {{-- <button type="button text-white" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
        {{session('error')}}
    </div>
@endif