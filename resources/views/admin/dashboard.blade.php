<h3>admin dashboard</h3>


<form method="POST" action="{{ route('admin.logout') }}">
    @csrf

    <a href="{{ route('admin.logout') }}"
        onclick="event.preventDefault();
                            this.closest('form').submit();">
        {{ __('Log Out') }}
    </a>
</form>
