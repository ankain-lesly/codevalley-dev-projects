<x-app>
    <x-header/>

    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="mb-3 pl-10">
            <label for="email" class="form-label">
                Full Name
            </label>
            <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter Full Name" required>
        </div>
        <div class="mb-3 pl-10">
            <label for="email" class="form-label">
                Email Address
            </label>
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter Email Address" required>
        </div>
        <div class="mb-3 pl-10">
            <label for="email" class="form-label">
                Phone Number
            </label>
            <input type="text" name="phone" class="form-control form-control-lg" placeholder="Enter Phone Number" required>
        </div>
        <select name="field_of_study" id="" class="custom-select custom-select-lg mb-3" required>
            <option disabled hidden selected value>
                <option value="Engineering">Engineering</option>
                <option value="Medicine">Medicine</option>
            </option>
        </select>
        <div class="mb-3 pl-10">
            <label for="password" class="form-label">
                Password
            </label>
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter Password" required>
        </div>
        <div class="mb-3 pl-10">
            <label for="password" class="form-label">
                Confirm Password
            </label>
            <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="Confirm Password" required>
        </div>
        <div class="mb-3 pl-10">
            <input type="submit" class="btn btn-primary" value="SIGNUP">
        </div>
    </form>

</x-app>