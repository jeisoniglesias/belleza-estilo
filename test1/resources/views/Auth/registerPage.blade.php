<x-default-layout>
    <x-slot name="element_left">
        <div class="d-flex flex-column h-100 m-2 p-3">
            <div class="mt-5">
                <p class="mb-1 h-1">CREAR CUENTA</p>
                <p class="text-muted mb-2">Comparte tus pensamientos con el mundo hoy.</p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name"name="name"
                                placeholder="Pepito Perez" value="{{ old('name') }}">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email"name="email"
                                placeholder="email@example.com" value="{{ old('email') }}">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="*********" value="{{ old('password') }}">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-outline-primary mb-3">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
    <x-slot name="element_right">
        <img src="https://images.pexels.com/photos/2033997/pexels-photo-2033997.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
            class="" alt="">
    </x-slot>
</x-default-layout>
