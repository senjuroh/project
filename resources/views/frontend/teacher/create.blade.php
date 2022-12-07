<x-template>
    <div class="container">
        <h1 class="text-danger">Teacher Form</h1>
        <form action="{{route('teacher.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <x-input label="Teacher Name" name="name"/>
                </div>
                <div class="col-md-4">
                    <x-input label="Address" name="address"/>
                </div>
                <div class="col-md-4">
                    <x-input label="phone" name="phone"/>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-sm my-3">Save Record</button>
                </div>
            </div>
        </form>
    </div>
</x-template>
