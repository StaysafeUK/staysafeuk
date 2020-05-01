@extends('layout')

@section('head')
<!-- <link href="css/default.css" rel="stylesheet" type="text/css" media="all" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

            <form method="POST" action="/message/">
                 @csrf

                <div class="field">
                    <label class="label" for="FirstName">Title</label>

                    <div class="control">
                        <input
                        class="input @error ('FirstName') ? is-danger @enderror"
                        type="text"
                        name="FirstName"
                        id="FirstName"
                        value="{{ old('FirstName') }}">

                        @error ('FirstName')
                            <p class="help is-danger">{{ $errors->first('FirstName') }}</p>
                        @endif
                    </div>

                </div>

                <div class="field">
                    <label class="label" for="SirName">SirName</label>

                    <div class="control">
                        <textarea
                        class="textarea @error ('SirName') ? is-danger @enderror"
                        name="SirName"
                        id="SirName"
                        >{{ old('SirName') }}</textarea>

                        @error ('SirName')
                            <p class="help is-danger">{{ $errors->first('SirName') }}</p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="County">Phone</label>

                    <div class="control">
                        <textarea
                        class="textarea @error ('County') ? is-danger @enderror"
                        name="County"
                        id="County"
                        >{{ old ('County') }}</textarea>

                        @error ('County')
                            <p class="help is-danger">{{ $errors->first('County') }}</p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="Phone">Phone</label>

                    <div class="control">
                        <textarea
                        class="textarea @error ('Phone') ? is-danger @enderror"
                        name="Phone"
                        id="Phone"
                        >{{ old ('Phone') }}</textarea>

                        @error ('Phone')
                            <p class="help is-danger">{{ $errors->first('Phone') }}</p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="email">Phone</label>

                    <div class="control">
                        <textarea
                        class="textarea @error ('email') ? is-danger @enderror"
                        name="email"
                        id="email"
                        >{{ old ('email') }}</textarea>

                        @error ('email')
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="Message">Message</label>

                    <div class="control">
                        <textarea
                        class="textarea @error ('Message') ? is-danger @enderror"
                        name="Message"
                        id="Message"
                        >{{ old ('Mesage') }}</textarea>

                        @error ('Mesage')
                            <p class="help is-danger">{{ $errors->first('Message') }}</p>
                        @endif
                    </div>
                </div>





             <!--  <div class="field">
                    <label class="label" for="Body">Tags</label>

                    <div class="control">
                        <select
                            name="tags"
                        >
                        {{--    @foreach ($tags as $tag) --}}
                         {{--       <option value="{{ $tag->id }}">{{ $tag->name }}</option> --}}
                        {{--    @endforeach --}}
                        </select>

                       {{-- @error ('tags') --}}
                       {{--     <p class="help is-danger">{{ $message }}</p> --}}
                       {{-- @enderror --}}
                    </div>
                </div> -->

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
