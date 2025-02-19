<x-app>
    <x-header/>

    <div>
        <div>
            <p>
                {{session("success")}}
            </p>
        </div>
    </div>

    <form action="" method="post">
        @csrf
        <div class="mb-3 pl-10">
            
            <label for="name" class="form-label">
                Full Name
            </label>
            <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control form-control-lg" placeholder="Enter Full Name" required>
        </div>
        <div class="mb-3 pl-10">
            <label for="phone" class="form-label">
                Phone Number
            </label>
            <input type="text" name="phone" value="{{Auth::user()->phone}}" class="form-control form-control-lg" placeholder="Enter Phone Number" required>
        </div>
        <select name="field_of_study" id="" class="custom-select custom-select-lg mb-3" required>
            @if (Auth::user()->field_of_study === "Engineering")
                <option value="Engineering">Engineering</option>
                <option value="Medicine">Medicine</option>
            @else
                <option value="Medicine">Medicine</option>
                <option value="Engineering">Engineering</option>
            @endif
        </select>
        <div class="mb-3 pl-10">
            <input type="submit" class="btn btn-primary" value="UPDATE PROFILE">
        </div>
    </form>

</x-app>