@extends('layout.app')

@section('content')

<div class="container">
    <form method="post" action="{{ route('logout.employee') }}">
    @csrf
        <div class="form-group">
            <label for="user">Select your name :</label>
            <select class="form-control" id="user" name="user">
                @foreach($employees as $e)
                <option name="id" hidden value="{{$e->id}}">{{$e->id}}</option>
                <option>
                    <span name="firstName">{{$e->firstName}}</span>
                    <span> </span>
                    <span name="lastName">{{$e->lastName}}</span>
                </option>
                @endforeach
            </select>
        </div>
        <div id="div1">
            <p id="time"></p>
            <p id="date"></p>
        </div>
        <div class="row">
            <div class="col-md-3 form-group">
                <div>
                    <button type="button" class="btn btn-outline-primary" id="clock-in-button">Clock in</button>
                </div>
                <div>
                    <h1>Break</h1>
                    <div>
                        <button type="button" class="btn btn-outline-primary" id="start-break">START</button>
                        <span id="start-break-time"></span>
                        <button type="button" class="btn btn-outline-success" id="end-break">END</button>
                        <span id="end-break-time"></span>
                    </div>
                    <br>
                </div>
                <button type="submit" class="btn btn-outline-success" id="clock-out-button" disabled>Clock
                    out</button>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3 form-group">
                        <div>
                            <h4>Time in</h2>
                        </div>
                        <h3 id="time-in" name="timeIn"></h3>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <h4>Time out</h2>
                        </div>
                        <h3 id="time-out" name="timeOut"></h3>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <h4>Total Hours Left Before Timeout</h2>
                        </div>
                        <h3 id="time-out" name="timeOut"></h3>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <h4>Total Hours Break</h2>
                        </div>
                        <h3 id="time-out" name="timeOut"></h3>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

<!-- Add online jQuery -->
<script src="https://code.jquery.com/jquery-3.1.0.min.js"
    integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous">
</script>
<script>
$(document).ready(function() {
    $("#clock-in-button").click(function() {
        $("#time-in").html(new Date().toLocaleTimeString())
        $("#clock-out-button").attr('disabled', false);
        $("#clock-in-button").attr('disabled', true);
    });
    $("#clock-out-button").click(function() {
        $("#time-out").html(new Date().toLocaleTimeString())
        $("#clock-in-button").attr('disabled', false);
        // $("#clock-out-button").attr('disabled', true);
    });
    $("#start-break").click(function() {
        $("#start-break-time").html(new Date().toLocaleTimeString())
        $("#end-break").attr('disabled', false);
        $("#start-break").attr('disabled', true);
    });
    $("#end-break").click(function() {
        $("#end-break-time").html(new Date().toLocaleTimeString())
        $("#start-break").attr('disabled', false);
        $("#end-break").attr('disabled', true);
    });
});
window.setInterval(ut, 1000);

function ut() {
    var d = new Date();
    document.getElementById("time").innerHTML = d.toLocaleTimeString();
    document.getElementById("date").innerHTML = d.toLocaleDateString();
}
</script>
</body>
@endsection