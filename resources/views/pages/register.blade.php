@extends("layouts.app")

@section('content')
    <link rel="stylesheet" href="{{ asset("/css/register.css") }}">
    @if (session()->has('message'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong>{{ session("message") }}</strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>       
    @endif
    <div class="register_group">
    <div class="group_left">
        <img src="{{ asset("images/re.png") }}" alt="">
        <div> <b>Inscrivez-vous, n'attendez pas</b></div>
    </div> 
        <form action="{{ route("student.store") }}"  class="group_right" method="post" enctype="multipart/form-data">
            @csrf
           
            <div>
                <label for="username">Username</label>
                <input type="text" name="username">
                @error("username")
                <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="cin">Cin</label>
                <input type="text"  name="cin" >
                @error("cin")
                <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label for="cin">Image Cin</label>
                <input type="file"  name="cin_img">
                @error("cin_img")
                <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="phone">Phone Number</label>
                <input type="number"  name="phone">
                @error("phone")
                <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="username">Fomration</label>
                <select  name="formation" >
                    <option value="1">Fomration Assagbi Hiya hadi</option>
                    <option value="2">Fomration Assagbi Hiya hadi</option>
                    <option value="3">Fomration Assagbi Hiya hadi</option>
                    <option value="4">Fomration Assagbi Hiya hadi</option>
                </select>
                @error("formation")
                <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label for="username">Type d'étude</label>
                <select  name="type_learn" >
                    <option value="b">études à distance</option>
                    <option value="a">Étudier en présence</option>
                </select>
                @error("type_learn")
                <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>

            <button type="submit">Inscrire</button>
        </form>
    </div>
</div>
@endsection