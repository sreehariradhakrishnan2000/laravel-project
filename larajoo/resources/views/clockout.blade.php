<form action="{{ route('clockout') }}" method="post">
    @csrf
    <button type="submit" class="btn btn-danger">Clock Out</button>
</form>
