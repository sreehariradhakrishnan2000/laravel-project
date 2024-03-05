<form action="{{ route('clockin') }}" method="post">
    @csrf
    <button type="submit" class="btn btn-primary">Clock In</button>
</form>
