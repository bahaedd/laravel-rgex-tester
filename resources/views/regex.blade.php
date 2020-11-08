@extends('layouts.master')

@section('content')
    <form action="{{ route('regex') }}" method="post" style="background-color: white; margin-top: 20px; padding: 20px 20px;">
        @csrf
        <label for="pattern" style="font-weight: bolder">Regex</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">/</span>
            </div>
            <input class="form-control" type="text" name="pattern" id="pattern">
            <div class="input-group-append">
              <span class="input-group-text">/</span>
            </div>
            <button class="btn btn-info" type="submit" style="margin-left: 10px">preg_match_all</button>
        </div>
        @error('pattern')
        <div class="alert alert-danger"><b>{{ $message }}</b></div>
        @enderror

        <div class="row">
            <div class="col-sm-6">
                <label for="subject" style="font-weight: bolder">Your search string(s)</label>
                <textarea name="subject" id="subject" cols="30" rows="10" class="form-control"></textarea>
                @error('subject')
                <div class="alert alert-danger"><b>{{ $message }}</b></div>
                @enderror
            </div>
            <div class="col-sm-6 mt-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="font-weight: bolder">preg_match_all</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        @if(isset($result[0]))
                            <div class="alert alert-success mt-2">Here are your matches</div>
                            @foreach( $result as $match )
                                <code>{{ $match }}</code>
                            @endforeach
                        @else
                            <div class="alert alert-warning mt-2"> There is no matches </div>
                        @endif
                    </div>
                  </div>
            </div>
        </div>

    </form>

@stop
