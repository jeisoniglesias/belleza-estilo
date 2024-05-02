<x-default-layout>
    <x-slot name="element_left">
        <img src="https://images.pexels.com/photos/2033997/pexels-photo-2033997.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
            class="" alt="">
    </x-slot>
    <x-slot name="element_right">
        <div class="d-flex flex-column h-100 p-3">
            <div class="mt-5">
                <p class="mb-1 h-1 text-center ">Inicio de Sesion.</p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email"name="email"
                            value="{{ old('email') }}">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" value="{{ old('password') }}">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-outline-primary mb-3">Iniciar sesion</button>
                </form>
            </div>
        </div>

    </x-slot>
</x-default-layout>
