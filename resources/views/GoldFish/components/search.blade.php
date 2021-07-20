

        @if($errors->any())
        <div style="" class="alert alert-danger" role="alert">
            {{$errors->first()}}
        </div>
        @endif
        <form style="=" action="{{ route('me_search') }}" method="post">
                @csrf
                <input type="text" name="search" placeholder="Search for a {{CMSHelper::settings('hotelname')}}">
				<center><input class="btn big green register"type="submit" value="Zoek Nu!"></center>
            </form>

