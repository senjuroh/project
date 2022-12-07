<x-template>
    <div class="container">
        <h1 class="text-primary">Teacher Edit</h1>
        <form action="{{route('teacher.update', $teacher->id)}}" method="post">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-4">
                    <x-input label="Teacher Name" name="name" value="{{$teacher->name}}"/>
                </div>
                <div class="col-md-4">
                    <x-input label="Address" name="address"  value="{{$teacher->address}}"/>
                </div>
                <div class="col-md-4">
                    <x-input label="phone" name="phone"  value="{{$teacher->phone}}"/>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-sm my-3">Update Record</button>
                </div>
            </div>
        </form>
    </div>
</x-template>
