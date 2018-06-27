@extends('layouts.master')

@section('title')
@parent
| Opt In/Out
@stop

@section('content')

<div class="page-heading-two">
    <div class="container">
        <h2>Opt Into or Out of Emails</h2>
    </div>
</div>

<div class="container">
    <h4>Because of recent privacy policy changes, all members of the ZTL ARTCC are required to opt into or out of all emails. All members are opted out by default and you must complete the form below in order to be opted in. If you would like to opt out, come back to this page at any time, accessable through the "My Profile" tab.</h4>
    <hr>
    @if(Auth::user()->opt == 0 || Auth::user()->opt == 2)
    <center>
        {{ Form::open(['action'=>'OptController@optIn', 'style'=>'display:inline-block']) }}
            <div class="form-group">
                {{ Form::label('opt', 'I Opt In to recive emails automaticly from the Atlanta vARTCC.') }}
                {{ Form::checkbox('opt', '1') }}
                <br>
                {{ Form::label('private', 'I accept the Atlanta vARTCC Privacy Policy.*') }}
                {{ Form::checkbox('private', '1') }}
            </div>
            <br><br>
            <button type="submit" class="btn btn-success">Confirm Option</button>
            <p><i>*Required</i></p>
        {{ Form::close() }}
    </center>
    @else
    <center>
        {{ Form::open(['action'=>'OptController@optOut', 'style'=>'display:inline-block']) }}
            {{ Form::label('opt', 'I elect to opt-out of emails issued from vZTL ARTCC') }}
            {{ Form::checkbox('opt', '0') }}
            <br><br>
            <button type="submit" class="btn btn-danger">Confirm Option</button>
        {{ Form::close() }}
    </center>
    @endif

@stop