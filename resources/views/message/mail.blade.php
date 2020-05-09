@extends('layout')

@section('head')
<!-- <link href="css/default.css" rel="stylesheet" type="text/css" media="all" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Please Send us your problem</h1>

            <form method="POST" action="/message">
                 @csrf
                 @method('PUT')

                <div class="field">
                    <label class="label" for="Title">Title</label>

                    <div class="control">
                        <input
                        class="input @error ('Title') ? is-danger @enderror"
                        type="text"
                        name="Title"
                        id="Title"
                        value="{{ old('Title') }}">

                        @error ('FirstName')
                            <p class="help is-danger">{{ $errors->first('FirstName') }}</p>
                        @endif
                    </div>

                </div>

                <div class="field">
                    <label class="label" for="FirstName">FirstName</label>

                    <div class="control">
                        <textarea
                        class="textarea @error ('FirstName') ? is-danger @enderror"
                        name="FirstName"
                        id="FirstName"
                        >{{ old('FirstName') }}</textarea>

                        @error ('FirstName')
                            <p class="help is-danger">{{ $errors->first('FirstName') }}</p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="Sirname">Sirname</label>

                    <div class="control">
                        <textarea
                        class="textarea @error ('Sirname') ? is-danger @enderror"
                        name="Sirname"
                        id="Sirname"
                        >{{ old ('Sirname') }}</textarea>

                        @error ('Sirname')
                            <p class="help is-danger">{{ $errors->first('Sirname') }}</p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="County">County</label>

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
                    <label class="label" for="email">Email</label>

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
