DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Form Validation in Laravel</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-5">

        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif    

        <form  method="post" action="{{ route('validate.form') }}" novalidate>

            @csrf

            <div class="form-group mb-2">
                <label>Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">

                @error('Name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label>UserName</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">

                @error('UserName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label>Date of Birth</label>
                <input type="text" class="form-control @error('Date of Birth') is-invalid @enderror" name="Date of Birth" id="Date of Birth">

                @error('Date of Birth')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Email</label>
                <input type="text" class="form-control @error('Email') is-invalid @enderror" name="Email" id="Email">

                @error('Email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Telephone No</label>
                <input type="email" class="form-control @error('Telephone No') is-invalid @enderror" name="Telephone No" id="Telephone No">

                @error('Telephone No')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>NIC No</label>
                <input type="text" class="form-control @error('NIC No') is-invalid @enderror" name="NIC No" id="NIC No">

                @error('NIC No')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label>Gender</label>
                <input type="text" class="form-control @error('Gender') is-invalid @enderror" name="Gender" id="Gender">

                @error('Gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                
            </div>

            <div class="form-group mb-2">
                <label>Password</label>
                <textarea class="form-control @error('Password') is-invalid @enderror" name="Password" id="Password" rows="1"></textarea>

                @error('Password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror   

            </div>
            <div class="form-group mb-2">
                <label>Reenter Password</label>
                <textarea class="form-control @error('Reenter Password') is-invalid @enderror" name="Reenter Password" id="Reenter Password" rows="1"></textarea>

                @error('Reenter Password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                     
            </div>

            <div class="d-grid mt-3">
              <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
            </div>
        </form>
    </div>
</body>

</html>