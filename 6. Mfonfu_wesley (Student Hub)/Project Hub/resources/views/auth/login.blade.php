<x-app>
    <x-header/>

    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="mb-3 pl-10">
            <label for="email" class="form-label">
                Email Address
            </label>
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter Email Address" required>
        </div>
        <div class="mb-3 pl-10">
            <label for="password" class="form-label">
                Password
            </label>
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter Password" required>
        </div>
        <div class="mb-3 pl-10">
            <input type="submit" class="btn btn-primary" value="LOGIN">
        </div>
    </form>

</x-app>